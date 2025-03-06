<?php
// app/Helpers.php
function view($name, $data = [])
{
    extract($data);
    ob_start();
    include __DIR__ . "/../views/{$name}.php";
    return ob_get_clean();
}
