<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT id_user,nama,username,email,level,status FROM tb_user";
$statement = $connection->query($sql);

foreach ($statement as $row) {
    $id_user = $row["id"];
    $nama = $row["nama"];
    $username = $row["username"];
    $email = $row["email"];
    $level = $row["level"];
    $status = $row["status"];

    echo "id_user   : $id_user" . PHP_EOL;
    echo "nama      : $nama" . PHP_EOL;
    echo "username  : $username" . PHP_EOL;
    echo "email     : $email" . PHP_EOL;
    echo "level     : $level" . PHP_EOL;
    echo "status    : $status" . PHP_EOL;

}

$connection = null;



$connection = null;