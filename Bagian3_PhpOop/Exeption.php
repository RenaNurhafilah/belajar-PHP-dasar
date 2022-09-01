<?php

require_once "Exeption/ValidationExeption.php";
require_once "Data/LoginRequest.php";
require_once "Helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "   ";
$loginRequest->password = "   ";

try {
    validateLoginRequest($loginRequest);
} catch (ValidationExeption | Exeption $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;

    echo $exception->getTraceAsString() . PHP_EOL;

    var_dump($exception->getTrace());

} finally {
    echo "ERROR ATAU ENGGAK, AKAN DI EKSEKUSI" .PHP_EOL;
}



