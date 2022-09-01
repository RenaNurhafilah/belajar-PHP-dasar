<?php

class ValidationUtil {
    static function validate(LoginRequest $request) {
        if(!isset($request->username)) {
            throw new ValidationExeption("Username is not set");
        } else if(!isset($request->password)) {
            throw new ValidationExeption("Password is not set");
        } else if(is_null($request->username)) {
            throw new ValidationExeption("Username is null");
        } else if(is_null($request->password)) {
            throw new ValidationExeption("Password is null");
        }
    }

    static function validateRegister(RegisterUserRequest $request) {
        if(!isset($request->username)) {
            throw new ValidationExeption("Username is not set");
        } else if(!isset($request->password)) {
            throw new ValidationExeption("Password is not set");
        } else if(is_null($request->username)) {
            throw new ValidationExeption("Username is null");
        } else if(is_null($request->password)) {
            throw new ValidationExeption("Password is null");
        }
    }



    static function validateReflection($request) {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if(!$property->isInitialized($request)) {
                throw new ValidationExeption("$property->name is not set");
            } else if(is_null($property->getValue($request))) {
                throw new ValidationExeption("$property->name is null");
            }
        }
    }
}
