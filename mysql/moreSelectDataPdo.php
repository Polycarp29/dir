<?php

$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'smartkodi';

try
{
    $conn = new PDO("mysql:host={$serverName}; dbname=smartkodi", $dbUsername, $dbPass);
    $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM User_landlord;");
    $stmt->execute();
    $stmt->setFetchMode(PDO :: FETCH_ASSOC);
    /** Convert into array */

    $users = $stmt->fetchAll();
    foreach($users as $user)
    {
        echo $user['id'];
        echo $user['u_name'];
        echo $user['u_email'];

    }
    
}catch(PDOException $e)
{
    echo "ERROR". $e->getMessage();
}