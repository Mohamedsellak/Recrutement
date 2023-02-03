<?php

$connectionStr = "mysql:host=localhost;dbname=myDB;port=3306";
$username = "root";
$password = "abdou2002";

try {
    $conn = new PDO($connectionStr, $username, $password);
} catch (PDOException $e) {
    print_r($e->getMessage());
}
