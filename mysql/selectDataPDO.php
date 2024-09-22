<?php 

/** Create Table */

echo "<table style='border' : solid 1px black;'>";

echo "<tr><th>ID </th><th>Firstname </th><th>Lastname </th><th>Date Time</th></tr>";

/** Create a class that inherits methods and properties from recursive iterator iterator */

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent :: __construct($it, self :: LEAVES_ONLY);

    }
    function current()
    {
        return "<td style = 'width:150px;border:1px solid black;'>".parent :: current(). "</td>";
    }
    function beginChildren()
    {
        echo "<tr>";
    }
    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}



/** Create a database connection with pdo */

$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'smartkodi';

try 
{
    $conn = new PDO("mysql:host={$serverName}; dbname=smartkodi", $dbUsername , $dbPass);
    $conn->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
    /** Create a prepared statement */

    $stmt = $conn->prepare("SELECT * FROM User_landlord;");
    $stmt->execute();

    /** fetch data */

    $result = $stmt->setFetchMode(PDO :: FETCH_ASSOC);
    
    /**Loop through */

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $key=>$value) 
    {
        echo $value;
    }
}catch(PDOException $e)
{
    echo "ERROR" . $e->getMessage();
}