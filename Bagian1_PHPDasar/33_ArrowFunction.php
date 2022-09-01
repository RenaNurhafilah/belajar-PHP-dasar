<?php

$firstName = "Rena";
$lastName = "Nurhafilah";

$anonymousFunction = function () use ($firstName, $lastName): string {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymousFunction();
echo $arrowFunction();

