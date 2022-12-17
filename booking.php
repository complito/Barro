<?php
require_once 'functions/renderTemplate.php';
$links = renderTemplate('templates/linksForUser.php', []);
$content = renderTemplate('templates/bookingContent.php', []);
$page = renderTemplate('templates/main.php', ['title' => 'Barro — Бронирование', 'links' => $links, 'content' => $content]);
echo $page;