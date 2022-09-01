<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "12345";

$sql = "INSERT INTO tb_user(username, password) VALUES (:username, :password)";
$statement = $connection->prepare($sql);
$statement->bindParam("username", $username);
$statement->bindParam("password", $password);
$statement->execute();

$connection = null;
