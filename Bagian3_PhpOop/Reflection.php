<?php

require_once "Exeption/ValidationExeption.php";
require_once "Data/LoginRequest.php";
require_once "Helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "Rena";
$request->password = "rahasia";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Rena";
$register->address = "Majalengka";
$register->email= "rena@gmail.com";

ValidationUtil::validateReflection($register);

ValidationUtil::validate($register);


