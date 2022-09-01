<?php

$nilai = "A";

if($nilai == "A"){
    echo "Anda lulus dengan sangat baik" . PHP_EOL;
} else if($nilai == "B" || "C"){
    echo "Anda lulus" . PHP_EOL;
} else if($nilai == "D"){
    echo "Anda tidak lulus" . PHP_EOL;
} else{
    echo "Mungkin anda salah jurusan" . PHP_EOL;
}

switch ($nilai){
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B";
    case "C";
        echo "Anda lulus" . PHP_EOL;
        break;
    default;
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
        break;
}

switch ($nilai):
    case "A";
        echo "Anda lulus dengan sangat baik" . PHP_EOL;
        break;
    case "B";
    case "C";
        echo "Anda lulus" . PHP_EOL;
        break;
    default;
        echo "Mungkin Anda salah jurusan" . PHP_EOL;
        break;
endswitch;
