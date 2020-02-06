<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td{
            border:1px solid black;
        }
        table, td, th {
            border-collapse:collapse;
        }
    </style>
</head>
<body>
        
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
?>
        <table>
            <tr><th>id</th> <th>name</th></tr>
<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["id"]. "</td> <td>" . $row["firstname"]. " ". $row["lastname"]."<td></tr>";
        // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

    </table>
</body>
</html>