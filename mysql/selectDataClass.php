<?php

class selectData extends mysqli
{   
    /** Initiating all the variables */
    private $serverName = 'localhost';
    private $dbUsername = 'root';
    private $dbPass = '';
    public $dbName;
    public $sql;
    public $conn;
    public $results;
    private $rows;

    

public function __construct($dbName)

/**Creating a mysqli database connection */
{   $this->dbName = $dbName;
    $this->conn = new mysqli($this->serverName, $this->dbUsername, $this->dbPass, $this->dbName);

    if($this->conn->connect_error)
    {
        die ("ERROR ACCESSING THE DATABASE" .$this->conn->connect_error);
    }
}
public function selectData($sql)
/**selecting data and printing it*/
{
    $this->sql = $sql;
    $this->results = $this->conn->query($this->sql);

    if($this->results->num_rows > 0)
    {while($this->rows = $this->results->fetch_assoc())
    {   
        
        echo "<table><tr><th>ID</th>NAME<th></th><th>EMAIL</th><th>DATE</th></tr>". "<td><tr><td>".$this->rows['id']  ."</tr><tr>".  ";". "<tr>". $this->rows['u_name'] . "</tr>". $this->rows['u_email'] . "<tr>". $this->rows['create_datetime'] ."</tr></td><table>"; 
    }
}
}
}

/** Initiating the instance of the class itself */

$fetch = new selectData('smartkodi');
$fetch->selectData("SELECT * FROM User_landlord");

