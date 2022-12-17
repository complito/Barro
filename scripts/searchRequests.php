<?php
if (!$_POST) {
    header('Location: /');
    exit;
}

$telephone = htmlspecialchars($_POST['telephone']);

require_once $_SERVER['DOCUMENT_ROOT'].'/functions/connectDB.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/functions/renderTemplate.php';

$mysqli = connectDB();
$requests = $mysqli->query("SELECT * FROM `Requests` WHERE `Telephone` LIKE '%$telephone%'");
$mysqli->close();

$rows = '';
foreach ($requests as $request) {
    $rows .= renderTemplate('../templates/searchRequestsRow.php',
    [
        'ID' => $request['ID'],
        'FIO' => $request['FIO'],
        'dateAndTime' => $request['DateAndTime'],
        'telephone' => $request['Telephone'],
        'peopleNumber' => $request['PeopleNumber'],
        'status' => $request['Status'],
        'creationDate' => $request['CreationDate']
    ]);
}

$table = renderTemplate('../templates/searchRequestsTable.php', ['rows' => $rows]);
echo $table;