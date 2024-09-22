<?php

$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'smartkodi';

try{
    $conn = new PDO("mysql:host={$serverName}; dbname=smartkodi", $dbUsername, $dbPass);
    $conn->setAttribute(PDO :: ATTR_ERRMODE,PDO :: ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT* FROM user_details");

    $stmt->execute();

    $stmt->setFetchMode(PDO :: FETCH_ASSOC);
    $users = $stmt->fetchAll();
    
    $rslt = json_decode($users);
    foreach($rslt as $v)
    {
        echo $v;
    }
}
catch(PDOException $e)
{
    echo "ERROR". $e->getMessage();
}