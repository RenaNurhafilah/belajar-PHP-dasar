<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = $connection->quote("admin '; #");
$password = $connection->quote("salah ga peduli");
$sql = "SELECT * FROM tb_user WHERE username = $username AND password = $password;";


echo  $sql .PHP_EOL;

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    //sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses Login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal Login : " . $find_user . PHP_EOL;
}

$connection = null;
