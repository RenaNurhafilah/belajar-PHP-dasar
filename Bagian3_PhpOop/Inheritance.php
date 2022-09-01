<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Wafa";
$manager->sayHello("Fillah");

$vp = new VicePresident();
$vp->name = "Rena";
$vp->sayHello("Fillah");
