<?php

require_once "Data/Category.php";

$category = new Category();
$category->setName("Hanphone");
$category->setExpensive(true);

$category->setName("");
echo "Name : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
