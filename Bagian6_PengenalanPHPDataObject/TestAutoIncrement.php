<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO tb_user(username, password) VALUES ('admin', '12345')");
$id = $connection->lastInsertId();

echo $id . PHP_EOL;

$connection = null;