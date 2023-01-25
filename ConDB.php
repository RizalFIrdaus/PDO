<?php

function conDB(): PDO
{
    $host = "localhost";
    $port = 3306;
    $dbname = "PDO";
    $username = "root";
    $password = "";

    return new PDO("mysql:host=$host:$port;dbname=$dbname", $username, $password);
}
