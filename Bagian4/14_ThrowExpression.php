<?php

function sayHello(?string $name) {
    if($name == null) {
        throw new Exeption("Tidak boleh null");
    }

    echo "Hello $name" > PHP_EOL;
}

function sayHelloExpression(?string $name){
    $result = $name!= null ? "Hello $name" : throw new Exeption("Tidak boleh null");
    echo $result . PHP_EOL;
}

sayHelloExpression("Rena");
sayHelloExpression(null);