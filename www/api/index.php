<?php

require dirname(__DIR__) . "\modules\controllers.php";
require dirname(__DIR__) . "\modules\headers.php";

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