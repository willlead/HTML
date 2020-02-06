<?php
$servername = "localhost";
$username = "root";
$password = "1234";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn) {
    die("Connection failed: ".$conn_connect_error());
}

echo "Connected successfully"."<br>";
mysqli_close($conn);
echo "DisConnected successfully";
?>