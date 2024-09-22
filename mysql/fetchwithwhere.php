<?php

$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'smartkodi';

$conn = new mysqli($serverName, $dbUsername, $dbPass, $dbName);

if($conn->connect_error)
{
    die("ERROR". $conn->connect_error);
}

$sql = "SELECT * FROM user_details WHERE username=? AND first_name=?";
$results = $conn->execute_query($sql, ['john96','john'])->fetch_assoc();

if($results > 0)
{
    echo $results['username'];
}
else{
    echo "No results";
}