<?php
function checkAuthSession() {
    if (!isset($_SESSION['authSuccess'])) {
        header('Location: /');
        exit;
    }
}