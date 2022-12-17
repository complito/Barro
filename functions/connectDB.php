<?php
function connectDB() {
    $mysqli = new mysqli('localhost', 'm91204by_barro', '7B734Cv', 'm91204by_barro');
    $mysqli->set_charset('utf8');
    return $mysqli;
}