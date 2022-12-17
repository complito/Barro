<?php
session_start();
require_once 'functions/checkAuthSession.php';
checkAuthSession();
require_once 'functions/renderTemplate.php';
$links = renderTemplate('templates/linksForAdmin.php', []);
$content = renderTemplate('templates/searchRequestsContent.php', []);
$page = renderTemplate('templates/main.php', ['title' => 'Barro — Поиск заявок', 'links' => $links, 'content' => $content]);
echo $page;