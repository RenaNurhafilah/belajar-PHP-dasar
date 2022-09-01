<?php

$first = [
    "first_name" => "Rena"
];

$last = [
    "first_name" => "Rena",
    "last_name" => "Nurhafilah"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Rena",
    "last_name" => "Nurhafilah"
];

$b = [
    "last_name" => "Nurhafilah",
    "first_name" => "Rena"
];

var_dump($a == $b);
var_dump($a === $b);

?>


