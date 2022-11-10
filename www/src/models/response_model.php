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