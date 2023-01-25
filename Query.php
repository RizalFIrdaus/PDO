<?php

require_once __DIR__ . "/ConDB.php";

try {
    $con = conDB();
    $q = "SELECT * FROM customer";
    $st = $con->query($q);
    $con = null;
} catch (PDOException $exception) {
    echo "Proses Gagal : " . $exception->getMessage() . PHP_EOL;
}
foreach ($st as $value) {
    $id = $value["id"];
    $name = $value["name"];
    $email = $value["email"];

    echo "ID: $id" . PHP_EOL;
    echo "NAME:$name" . PHP_EOL;
    echo "EMAIL:$email" . PHP_EOL;
    echo PHP_EOL;
}
