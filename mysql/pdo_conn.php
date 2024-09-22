<?php
/** Using PHP Object Data (PDO) */

define('SERVER_NAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'phish');


/**Create an object conn in response to the class pdo */

try 
{
    $conn = new PDO("mysql: host=SERVER_NAME; dbname=phish", DB_USERNAME , DB_PASSWORD);

    // Check for errors 

    $conn->setAttribute(PDO :: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    $query = "CREATE TABLE trans (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        withdraw VARCHAR(100) NOT NULL,
        deposit VARCHAR(100) NOT NULL, 
        date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    )";

    // Exceute the query 

    $conn->exec($query);
    echo "Created Succesfully";
}
catch(PDOexception $e)
{
    echo "Connection Failed" . $e->getMessage();
}

/** KEY THINGS */

/**
 * $conn is an bject to the class PDO;
 * PDO :: ATTR_ERRMOD and PDO ::ERRMODE_EXCEPTION is a constant in response the class PDO 
 */