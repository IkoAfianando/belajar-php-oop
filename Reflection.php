<?php

require_once "helper/Validation.php";
require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";

$request = new LoginRequest();

ValidationUtil::validate($request);
