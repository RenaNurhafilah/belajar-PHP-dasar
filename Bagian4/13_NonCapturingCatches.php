<?php

function validate(string $value) {
    if (trim($value) == "") {
        throw new Exeption("Invalid string");
    }
}

try {
    validate("     ");
} catch (Exeption) {
    echo "Invalid" . PHP_EOL;
}