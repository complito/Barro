<?php
session_start();
require_once 'functions/checkAuthSession.php';
checkAuthSession();
require_once 'functions/renderTemplate.php';
require_once 'functions/connectDB.php';

$tableOrText = NULL;
$mysqli = connectDB();
$openedRequests = $mysqli->query("SELECT * FROM `Requests` WHERE `Status` = 'Открыто'");
if ($openedRequests->num_rows == 0)
    $tableOrText = 'Открытых заявок нет';
else {
    $rows = '';
    foreach ($openedRequests as $request) {
        $rows .= renderTemplate('templates/openedRequestsRow.php',
        [
            'ID' => $request['ID'],
            'FIO' => $request['FIO'],
            'dateAndTime' => $request['DateAndTime'],
            'telephone' => $request['Telephone'],
            'peopleNumber' => $request['PeopleNumber'],
            'creationDate' => $request['CreationDate']
        ]);
    }
    $tableOrText = renderTemplate('templates/openedRequestsTable.php', ['rows' => $rows]);
}
$links = renderTemplate('templates/linksForAdmin.php', []);
$content = renderTemplate('templates/openedRequestsContent.php', ['tableOrText' => $tableOrText]);
$page = renderTemplate('templates/main.php', ['title' => 'Barro — Открытые заявки', 'links' => $links, 'content' => $content]);
echo $page;