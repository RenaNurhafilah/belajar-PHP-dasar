<?php

function validateLoginRequest(LoginRequest $request) {
    if (!isset($LoginRequest->username)) {
        throw new ValidationExeption("Username is null");
    } else if (!isset($LoginRequest->password)) {
        throw new ValidationExeption("Password is null");
    } else if ($request->username == "") {
        throw new Exeption("Username is empaty");
    } else if ($request->password == "") {
        throw new Exeption("Password is empaty");
    }
}