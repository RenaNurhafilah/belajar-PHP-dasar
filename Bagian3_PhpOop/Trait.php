<?php

require_once "Data/SayGoodBye.php";

use Data\Traits\{Person, sayHello, sayGoodBye};

$person = new Person();
$person->goodBye("Wafa");
$person->hello("Fillah");

$person->name = "Rena";
var_dump($person);

$person->run();




