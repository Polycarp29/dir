<?php
// Creating a database connection in php 

define('SERVER_NAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASS', '');
define('DB_NAME', 'updatedv');

/**Use PDO For Connection */

try
{
    $conn = new PDO("mysql: host=SERVERNAME; dbname=DB_NAME", DB_USERNAME, DB_PASS);
    $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo " ERROR"."<br />". $e->getMessage();
}


class validate
{
    public $data 

    public  function __construct()
    {
        $this->data = $data;
    }
   
    public static function sanitize_input($this->data)
    {
        $this->data = trim($this->data);
        $this->data = stripcslashes($this->data);
        $this->data = htmlspecialchars($this->data);


        return $this->data;
    }

    
}


// Collect Userdata 

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $username = validate :: sanitize_input($_POST['username']);
    $password = validate :: sanitize_input($_POST['password']);
}

$password = password_hash($password, PASSWORD_DEFAULT);

try
{
    $stmt = $conn->prepare("SELECT * FROM users WHERE username= :username AND password = :password LIMIT 1");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    //Fetch Data 

    $stmt->setFetchMode(PDO:: FETCH_ASSOC);
    $result = $stmt->fetchAll();
    foreach($results as $v)
    {
        if($v['username'] == $username &&  $v['password'] == $password)
        {
            $_SESSION['username'] = $username;
            header('Location: welcome.php');

        }
        else{
            echo "<p> Wrong Username or Password</p>";
        }
    }



}catch(PDOException $e)
{
    echo "ERROR" . "<br />". $e->getMessage();
}


/**VERSION 2 */

define('SERVER_NAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASS', '');
define('DB_NAME', 'updatedv');

$conn = new msqli('SERVER_NAME', 'DB_USERNAME', 'DB_PASS', 'DB_NAME');
if($conn->connect_error)
{
    die("ERROR CONNECTING" . $conn->connect_error);
}

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $username = validate :: sanitize_input($_POST['username']);
    $password = validate :: sanitize_input($_POST['password']);
}

$password = password_hash($password, PASSWORD_DEFAULT); 

$statement = $conn->prepare("SELECT CONCAT(*) FROM users WHERE username= ? AND password = ?");
$statement->bind_param('ss', $username , $password);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetchall(MYSQLI_ASSOC);
foreach($data as $v):
    if($v['username'] == $username && $v['password'] == $password){
        header("Location: welcome.php");}
        else{
            echo "<p>oUsername or password is wrong</p>";
        }
    endif;

