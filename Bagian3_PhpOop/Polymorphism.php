<?php

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Rena");
var_dump($company);

$company->programmer = new BackEndProgrammer("Rena");
var_dump($company);

$company->programmer = new FrontendProgrammer("Rena");
var_dump($company);

sayHelloProgrammer(new Programmer("Rena"));
sayHelloProgrammer(new BackendProgrammer("Rena"));
sayHelloProgrammer(new FrontendProgrammer("Rena"));
