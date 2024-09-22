<?php 

class DbConn extends PDO 
{
    private  $servername = "localhost";
    private  $db_username = "root";
    private  $db_pass = "";
    private $db_name = "phish";
    private $connect; 

    public function __construct()
    {
         try 
         {
            $this->connect = new PDO("mysql: host={$this->servername}; dbname=$this->db_name", $this->db_username, $this->db_pass);
            $this->connect->setAttribute(PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION);
            echo "Connected Successfully!";
         }

         catch(PDOException $e)
         {
             echo "ERROR" . "<br>" . $e->getMessage();
         }
    }
    public function connect()
    {
        return $this->connect;
    }

}

$conn = new Dbconn();
