<?php

require_once __DIR__ . "/ConDB.php";

$con = conDB();

$sql = <<<sql
    INSERT INTO customer(id,name,email) 
    VALUES ("1","Rizal", "rizal@gmail.com");
sql;

$con->exec($sql);

$con = null;
