<?php
require_once "exception/ValidationException.php";
require_once "helper/Validation.php";
require_once "data/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try{
    validateLoginRequest($loginRequest);
}catch (ValidationException | Exception $exception) { // | untuk menaangkap beberapa jenis class exception
    echo "Validation Error : {$exception->getMessage()}" . PHP_EOL;
    var_dump($exception->getTrace());

    echo $exception->getTraceAsString(). PHP_EOL;
} finally {
    echo "ERROR ATAU ENGGAK TETAP AKAN DIEKSESKUSI" . PHP_EOL;
}

echo "VALID" . PHP_EOL;