<?php

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rena", "strtoupper");
sayHello("Rena", "strtolower");
sayHello("Rena", function(string $name): string {
    return strtoupper($name);
});
sayHello("Rena", fn($name) => strtoupper($name));

