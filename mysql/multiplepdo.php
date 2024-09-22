<?php

define('DB_HOST','localhost');
define('DB_USERNAME', 'root');
define('DB_PASS', '');


try 
{
    $conn = new PDO("mysql: host=DB_HOST; dbname=myDbPDO", DB_USERNAME, DB_PASS);
    $conn->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);

    $conn->beginTransaction();

    $stmt = $conn->prepare("INSERT INTO Users(f_name, l_name, email)VALUES(:f_name, :l_name, :email)");
    $stmt->bindParam(":f_name", $firstname);
    $stmt->bindParam(":l_name", $lastname);
    $stmt->bindParam(":email", $email);

    $firstname = 'Makokha';
    $lastname = 'Ombacho';
    $email = 'maxombacho@gmail.com';
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO transaction(username, password, email)VALUES(:username, :password, :email)");

    
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":email", $email);

    
    $username = 'Makokha';
    $password = 'Nm643Ppa';
    $email = 'maxombacho@gmail.com';

    $stmt->execute();
    
    $conn->commit();

    echo 'Data Parsed Successfully';

}
catch(PDOException $e)
{
    echo "ERROR". $e->getMessage();
}

/** Here we are adding multiple data to the database using PDO and also prepared statement parameters 
 * SQL might give an error when you combine both the parameters 
 * It is advisable to use each separately
 */