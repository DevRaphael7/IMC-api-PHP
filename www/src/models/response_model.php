<?php

function successResponse($data, $message) {
    return  json_encode(array([
        "message" => $message,
        "data" => $data,
        "status" => 200
    ]));
}