<?php 

$serverName = 'localhost';
$dbUsername = 'root';
$dbPass = '';
$dbName = 'smartkodi';

$conn = new mysqli($serverName, $dbUsername, $dbPass, $dbName);
if($conn->connect_error)
{
    die('Cant Connect'. $conn->connect_error);
}
echo 'Connected';

$sql = "SELECT * FROM User_landlord";
$result = $conn->query($sql);

if($result->num_rows > 0)
{    
    echo "<table><tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Time</th>
    </tr>
      ";
    while($row = $result->fetch_assoc())
    {
        
        echo "<tr>".
                "<td>".$row['id']. "</td>".
                "<td>".$row['u_name']."</td>".
                "<td>".$row['u_email']."</td>".
                "<td>".$row['create_datetime']."</td>";


       
    }
    echo'</tr></table>';
}