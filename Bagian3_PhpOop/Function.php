<?php

require_once "Data/Person.php";

$rena = new Person("Rena", "Majalengka");
$rena->name = "Rena";
$rena->sayHello("Wafa");

$fillah = new Person("Fillah", "Cirebon");
$fillah->name = "Fillah";
$fillah->sayHello(null);

$rena->info();
$fillah->info();

