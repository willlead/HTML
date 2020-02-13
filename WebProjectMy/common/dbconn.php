<?php
header("Content-Type: text/html; charset=utf-8");
$servername = "localhost";
// $username = "myrecipe";
// $password = "qlqjs2tka*7";
// $dbname = "myrecipe";
$username = "root";
$password = "1234";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>