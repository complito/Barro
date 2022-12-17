<?php
if (!$_POST) {
    header('Location: /');
    exit;
}

$openRequestID = $_POST['openRequestID'];

require_once $_SERVER['DOCUMENT_ROOT'].'/functions/connectDB.php';
$mysqli = connectDB();
$mysqli->query("UPDATE `Requests` SET `Status` = 'Закрыто' WHERE `ID` = $openRequestID");
$mysqli->close();

echo $openRequestID;