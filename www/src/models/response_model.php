<?php

function successResponse($data, $message) {
    return  json_encode([
        "message" => $message,
        "data" => $data,
        "status" => 200
    ]);
}

function errorResponse($message) {
    return  json_encode([
        "message" => $message,
        "data" => null,
        "status" => 400
    ]);
}

function responseMethodNotAllow(string $methods) {
    http_response_code(405);
    header("Allow: $methods");

    return  json_encode([
        "message" => "Método inválido",
        "data" => null,
        "status" => 405
    ]);
}