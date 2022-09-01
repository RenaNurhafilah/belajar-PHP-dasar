<?php

require_once "Data/Person.php";

$person = new Person("Rena", "Majalengka");
$person->name = "Rena";
$person->address = "Majalengka";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Wafa", null);
$person2->name = "Wafa";
$person2->address = null;

var_dump($person2);