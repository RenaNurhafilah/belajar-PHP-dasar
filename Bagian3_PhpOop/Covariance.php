<?php

require_once "Data/Food.php";
require_once "Data/Animal.php";
require_once "Data/AnimalShelter.php";

$catShelter = new \Data\catShelter();
$cat = $catShelter->adopt("Luna");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\dogShelter();
$dog = $dogShelter->adopt("Doggy");
$dog->eat(new \Data\Food());

