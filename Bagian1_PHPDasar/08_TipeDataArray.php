<?php

$values = array(18, 9, 8, 7.5);
var_dump($values);

$names = ["Rena", "Nurhafilah", "Fillah"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Wafa";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Nita";
var_dump($names);

var_dump(count($names));

$rena = array(
    "id" => "rena",
    "name" => "Rena Nurhafilah",
    "age" => 20,
    "address" => array(
        "city" => "Majalengka",
        "country" => "Indonesia"
    )
);

var_dump($rena);

var_dump($rena["name"]);
var_dump($rena["address"]["country"]);

$wafa= [
    "id" => "wafa",
    "name" => "Wafa Nurhafidzah",
    "age" => 14,
    "address" => [
        "city" => "Tangerang",
        "country" => "Indonesia"
    ]
];

var_dump($wafa);

?>
