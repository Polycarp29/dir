<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPass = "";
$dbName = "myDbPDO";

try 
{
    $conn = new PDO("mysql: host={$serverName}; dbname=myDbPDO", $dbUsername, $dbPass);

    // --> Initialize errors 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    /** Prepare SQL Template */

    $stmt = $conn->prepare("INSERT INTO Users(f_name, l_name, email)VALUES(:f_name , :l_name, :email)");

    // Bind Individual Parameters 

    $stmt->bindParam(":f_name", $fname);
    $stmt->bindParam(":l_name", $lname);
    $stmt->bindParam(":email", $email);

    $fname = "John";
    $lname = "Doe";
    $email = "johndoe@example.com";
    $stmt->execute();
    echo "Connected Successfully";

}catch(PDOExeption $e)
{
    echo "ERROR". "<br />". $e->getMessage();
}