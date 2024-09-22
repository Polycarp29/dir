<?php 
require "pdo_conn.php";

try 
{
    $conn = new PDO("mysql: host=SERVER_NAME; dbname=phish", DB_USERNAME , DB_PASSWORD);

    // check if there is any errors 

    $conn->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);

    $query = "CREATE TABLE transactions (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        withdraw VARCHAR(100) NOT NULL,
        deposit VARCHAR(100) NOT NULL, 
        date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    )";

    // Exceute the query 

    $conn->exec($query);

}
catch(PDOException $e)
{
    echo $query . "<br>" . $e->getMessage();
}

$conn = null;