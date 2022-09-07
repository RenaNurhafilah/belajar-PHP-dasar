<?php

function sayHello(string $first, string $midle = "", string $last): void {
    echo "Hello $first $midle $last" . PHP_EOL;
}

// without named argument 
sayHello("Rena", "Nurhafilah", "Hafidzah");
sayHello("Rena",  "Hafidzah"); // error

sayHello(last: "Hafidzah", first: "Rena", midle: "Nurhafilah");
sayHello(first: "Rena", last: "Hafidzah");