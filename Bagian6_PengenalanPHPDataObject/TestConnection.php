<?php

$host = "localhost";
$port = 3306;
$database = "db_sikampus";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database MySql" . PHP_EOL;

    // menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database MySql : " . $exception->getMessage() . PHP_EOL;
}


