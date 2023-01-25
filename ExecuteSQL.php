<?php

require_once __DIR__ . "/ConDB.php";

try {
    $con = conDB();
    $sql = <<<sql
    INSERT INTO customer(name,email) 
    VALUES ("Esan", "Esan@gmail.com");
    sql;

    $con->exec($sql);
    $con = null;
} catch (PDOException $exception) {
    echo "Proses Gagal : " . $exception->getMessage() . PHP_EOL;
}
