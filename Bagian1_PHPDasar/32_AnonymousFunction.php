<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Rena");
$sayHello("Wafa");

function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Rena", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Rena", $filterFunction);

$firstName = "Rena";
$lastName = "Nurhafilah";

$sayHelloRena = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloRena();

$firstName = "Wafa";
$lastName = "Nurhafidzah";
$sayHelloRena();
