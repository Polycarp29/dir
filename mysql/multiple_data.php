<?php 

$serverName = "localhost";
$dbUserName =  "root";
$dbPass = "";
$dbName = "myDbPDO";

try 
{
    $conn = new PDO("mysql:host={$serverName}; dbname=myDbPDO", $dbUserName, $dbPass);

    $conn->setAttribute(PDO :: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->beginTransaction();

    $conn->exec("INSERT INTO Users(f_name, l_name, email)VALUES('Max', 'Ombacho' , 'maxombacho@gmail.com')");
    $conn->exec("INSERT INTO Users(f_name, l_name, email)VALUES('Poltech', 'RVR', 'poltechrvr@gmail.com')");

    $conn->commit();
    echo "Data Submitted Successfully";
}catch(PDOException $e)
{
    echo 'ERROR'. $e->getMessage();
}
