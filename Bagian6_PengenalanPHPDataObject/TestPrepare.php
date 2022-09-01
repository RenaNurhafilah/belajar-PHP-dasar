<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin'; #";
$password = "adgfdgf";

$sql = "SELECT * FROM tb_user WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

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