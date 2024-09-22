<?php 

/** Create a database using PDO */

define('SERVER_NAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASS', '');


// Handle errors and also create a database 

try 
{
    $conn = new PDO("mysql: host=SERVER_NAME", DB_USERNAME , DB_PASS);

    $conn->setAttribute(PDO :: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE myDbPDO";

    // Use Exec Method Because no 

    $conn->exec($sql); 

    echo "Created Successfully";
}
catch(PDOException $e)
{
    echo $sql . 'Something Went Wrong' . $e->getMessage();
}

$conn = null ;