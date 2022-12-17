<?php
session_start();
if (isset($_SESSION['authSuccess'])) {
    header('Location: /openedRequests.php');
    exit;
}
require_once 'functions/renderTemplate.php';
$links = renderTemplate('templates/linksForUser.php', []);
$content = renderTemplate('templates/authorization.php', []);
$page = renderTemplate('templates/main.php', ['title' => 'Barro — Админ панель', 'links' => $links, 'content' => $content]);
echo $page;