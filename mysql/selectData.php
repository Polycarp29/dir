<?php
// Initialize variables for MYSQLI CONNECTION

$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'UserDetails';

$conn = new mysqli($serverName, $dbUsername, $dbPass, $dbName);

if($conn->connect_error):
    die("Unable to Connect" . $conn->connect_error);
endif;
    echo "Connected Successfully";


// Fetch all Data 

$sql = "SELECT * FROM Users_ ";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()):
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        echo "<tr><td>".$row["id"]. "</tr></td>".$row["username"]." ".$row["email"]. "</td></tr>";
    endwhile;
    echo "</table>";
}
