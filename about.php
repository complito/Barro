<?php
require_once 'functions/renderTemplate.php';
$links = renderTemplate('templates/linksForUser.php', []);
$content = renderTemplate('templates/aboutContent.php', []);
$page = renderTemplate('templates/main.php', ['title' => 'Barro — О нас', 'links' => $links, 'content' => $content]);
echo $page;