<?php

require_once "Data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Rena";
$student1->value = 100;

$student1(1, "Rena", true, "Nurhafilah");
