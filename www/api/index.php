<?php

header('Content-Type: application/json; charset=utf-8');

require dirname(__DIR__) . "\src\ImcController\controller.php";

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$parts = explode("/", $path);

# My con
$imcController = new ImcController;

if($parts[5] == "imc") {
    $imcController -> processRequest($_SERVER["REQUEST_METHOD"], $parts);
} else {
    echo "Hello World!";
}

?>