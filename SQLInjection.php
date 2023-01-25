<?php

require_once __DIR__ . "/ConDB.php";

$username = "admin'; #";
$password = "admin";

try {
    $con = conDB();
    $st = "SELECT * FROM admin WHERE username='$username' AND password = '$password'";
    // echo $st;
    $result = $con->query($st);
    $sukses = false;
    $con = null;
    $username = null;
} catch (PDOException $exception) {
    echo "Error : " . $exception->getMessage();
}
// var_dump($result);
foreach ($result as $row) {
    $sukses = true;
    $username = $row["username"];
    // echo $username;
}
if ($sukses) {
    echo "Berhasil Login";
} else {
    echo "Gagal Login";
}
