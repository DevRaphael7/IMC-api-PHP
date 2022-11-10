<?php

class ErrorHandler {

    public static function handleException(Throwable $exception) {
        echo json_encode([
            "code" => $exception->getCode(),
            "message" => $exception->getMessage(),
            "data" => null
        ]);
    }
}