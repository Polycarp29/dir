<?php
include('fetch.php');

$commentNewCount = $_POST['commentNewCount'];
$sql = "SELECT * FROM user_details LIMIT $commentNewCount";
$results = $conn->query($sql);
if($results->num_rows > 0):
    while($rows = $results->fetch_assoc()):
        echo "<p>". $rows['username']. "</p>";
        echo "<p>". $rows['first_name']. "</p>";
        echo "<p>". $rows['last_name']. "</p>";
    endwhile;
endif;
