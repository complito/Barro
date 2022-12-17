<?php
function renderTemplate($template, $data) {
    extract($data);
    ob_start();
    require $template;
    $output = ob_get_clean();
    return $output;
}