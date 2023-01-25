<?php


$host = "localhost";
$port = 3306;
$dbname = "PDO";
$username = "root";
$password = "";

try {
    $con = new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
    echo "Sukses terhubung dengan database";
} catch (PDOException $exception) {
    echo "Gagal terhubung dengan database, error : {$exception->getMessage()}";
}
