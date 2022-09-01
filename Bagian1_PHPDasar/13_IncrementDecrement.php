<?php

$a = 10;

$b = $a++;

$b = $a;
$a = $a + 1;

$b = ++$a;

$a = $a + 1;
$b = $a;

var_dump($a);
var_dump($b);

?>