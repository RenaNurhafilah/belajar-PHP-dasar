<?php

function createName() {
    $name = "Rena"; // local scope
}

createName();
echo $name . PHP_EOL;
