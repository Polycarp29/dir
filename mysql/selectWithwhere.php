<?php

$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'smartkodi';

$conn = new mysqli($serverName, $dbUsername, $dbPass, $dbName);

$arr=[];

if($conn->connect_error)
{
    die("ERROR" . $conn->connect_error);
}

$sql = "SELECT u_email FROM User_landlord WHERE u_name=?";
$users = $conn->execute_query($sql, ['John'])->fetch_assoc();

$arr[] = $users;
foreach($arr as $user=>$value)
{
    echo $value; 
}

