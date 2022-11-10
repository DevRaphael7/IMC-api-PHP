<?php

require dirname(__DIR__) . "\src\ErrorHandler.php";
header('Content-Type: application/json; charset=utf-8');

//Desativa respostas de erros.
ini_set("display_errors", "Off");

// set_exception_handler("ErrorHandler::handleException");