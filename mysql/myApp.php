
<?php

class InsertData extends PDO
{
    private $serverName = 'localhost';
    private $dbUsername = 'root';
    private $dbPass = '';
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->serverName}", $this->dbUsername, $this->dbPass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->conn->exec("CREATE DATABASE IF NOT EXISTS UserDetails");
            echo "DB CREATED SUCCESSFULLY<br>";
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage() . "<br>";
        }
    }

    public function createTbl()
    {
        try {
            $this->conn->exec("USE UserDetails"); // Use the Db Created

            $this->conn->exec("CREATE TABLE IF NOT EXISTS Users_ (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(100) NOT NULL,
                password VARCHAR(100) NOT NULL,
                email VARCHAR(100) NOT NULL
            )");
            echo "TABLE Users_ CREATED SUCCESSFULLY<br>";
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage() . "<br>";
        }
    }

    public function insertData($username, $password, $email)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO Users_(username, password, email) VALUES (:username, :password, :email)");

            // Assign parameter values
            $this->username = $username;
            $this->password = $password;
            $this->email = $email;

            // Bind the params
            $stmt->bindParam(":username", $this->username);
            $stmt->bindParam(":password", $this->password);
            $stmt->bindParam(":email", $this->email);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Records Submitted Successfully<br>";
            } else {
                echo "Something Went Wrong<br>";
            }
        } catch (PDOException $e) {
            echo "ERROR: " . $e->getMessage() . "<br>";
        }
    }
}

$insertData = new InsertData();
sleep(10);
echo "Creating Table .....<br />";
$insertData->createTbl();
sleep(10);
echo "Initiating Data... <br />";
$insertData->insertData('john', 'Doe', 'johndoe@gmail.com');
