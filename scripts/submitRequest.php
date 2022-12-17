<?php
if (!$_POST) {
    header('Location: /');
    exit;
}

$FIO = htmlspecialchars($_POST['FIO']);
$dateAndTime = htmlspecialchars($_POST['dateAndTime']);
$telephone = htmlspecialchars($_POST['telephone']);
$peopleNumber = htmlspecialchars($_POST['peopleNumber']);
$creationDate = time() + 18000;

if (!($FIO && $dateAndTime && $telephone && $peopleNumber)) {
    echo '<p class="color_r">Вы отправили не полную форму</p>';
    exit;
}

require_once $_SERVER['DOCUMENT_ROOT'].'/functions/connectDB.php';

$mysqli = connectDB();
$mysqli->query("INSERT INTO `Requests` (`FIO`, `DateAndTime`, `Telephone`, `PeopleNumber`, `Status`, `CreationDate`) VALUES ('$FIO', '$dateAndTime', '$telephone', '$peopleNumber', 'Открыто', $creationDate)");
$mysqli->close();

echo '<p class="color_g">Ваша заявка отправлена<br>В ближайшее время вам позвонят</p>';