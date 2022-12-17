<?php
session_start();

if (!$_POST) {
    header('Location: /');
    exit;
}

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);

if ($login != 'user92857' || $password != 'Kx92!os') {
    echo '<p class="color_r">Неправильные данные</p>';
    exit;
}

$_SESSION['authSuccess'] = true;
echo 'openedRequests.php';