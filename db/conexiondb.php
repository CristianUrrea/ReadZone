<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "readzonedb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    die("Connection failed: " . mysqli_connect_error());
    exit;
}
// echo "Connected successfully";
