<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM tb_user";
$statement = $connection->query($sql);

$users = $statement->fetchAll();
var_dump($users);

$connection = null;