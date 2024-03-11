<?php
// Database connection
$server = "localhost";
$username = "root";
$password = "";
$database = "ssc";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed");
}