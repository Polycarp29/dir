<?php 

$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'smartkodi';


$conn = new mysqli($serverName, $dbUsername, $dbPass, $dbName);

if($conn->connect_error):
    die("Connect Error". $conn->connect_error);
endif;
$id = "John";
$sql = "SELECT * FROM property_details WHERE u_landlord=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("s", $id);
$stmt->execute();

/**Fetch the results */

$result = $stmt->get_result();

/**Present result into an array */

$data = $result->fetch_all(MYSQLI_ASSOC);

if($data):
    foreach($data as $user):
        echo $user['u_landlord']."<hr>".$user['prptyName'];
    endforeach;
endif;