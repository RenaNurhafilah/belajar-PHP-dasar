<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO tb_user(id_user,nama,username,email,level,status)
    VALUES ('123', 'rena', 'rena123', 'rena@gmail.com', 'mahasiswa', 'aktif');
SQL;

$connection->exec($sql);

$connection = null;

