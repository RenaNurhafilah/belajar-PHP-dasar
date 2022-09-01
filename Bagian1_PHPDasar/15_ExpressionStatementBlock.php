<?php

// EXPRESSION SEDERHANA
$a = 5; //angka 5 adalah expression
$b = $a; //angka $a adalah expression

// EXPRESSION COMPLEX
function getValue(){
    return 100;
}

$value = getValue(); //getValue adalah expression


// STATEMENT
$name = "Rena Nurhafilah"; //Setiap kalimat lengkap adalah statement

echo $name;

$date = new DateTime();


// BLOCK
function runApp($name){
    echo "Start Program".PHP_EOL;
    echo "Hello $name".PHP_EOL;
    echo "End Program".PHP_EOL;
}
?>
