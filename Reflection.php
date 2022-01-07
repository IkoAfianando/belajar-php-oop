<?php

require_once "helper/ValidationUtil.php";
require_once "data/LoginRequest.php";
require_once "exception/ValidationException.php";

$request = new LoginRequest();
$request->username = "iko";
$request->password = "rahasia";
//ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Iko";
$register->address = "Iko";
$register->email = "Iko";

ValidationUtil::validateReflection($register);
