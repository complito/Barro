<?php
session_start();

if (!$_POST) {
    header('Location: /');
    exit;
}

unset($_SESSION['authSuccess']);
echo 'index.php';