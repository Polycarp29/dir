<?php

/** Create OOP connection of mysqli */

define('SERVER_NAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'phish');
/** Create an object called $conn */

$conn = new mysqli(SERVER_NAME , DB_USERNAME , DB_PASSWORD , DB_NAME);

/**Handling the errors */


if($conn->connect_error)
{
    die('Connection Failed' . $conn->connect_error);
}
else 
{
    echo "Connection Successfull";
}
