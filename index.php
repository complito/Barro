<?php
require_once 'functions/renderTemplate.php';
$links = renderTemplate('templates/linksForUser.php', []);
$page = renderTemplate('templates/main.php', ['title' => 'Barro — Главная страница', 'links' => $links, 'content' => '']);
echo $page;