<?php

$host = "mysql-service";
$user = "root";
$password = "root";
$database = "cruddb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>