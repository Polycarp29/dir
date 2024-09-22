<?php
$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'smartkodi';

$conn = new mysqli($serverName, $dbUsername, $dbPass, $dbName);

if($conn->connect_error):
    die("Error Connection" . $conn->connect_error);
endif;



