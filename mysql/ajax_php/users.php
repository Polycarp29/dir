<?php
include('fetch.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        var commentCount = 2;
        $("button").click(function() {
            commentCount = commentCount + 2;
            $("#comments").load("load-users.php", {
                commentNewCount: commentCount
            });
        });
    });
</script>


</head>
<body>
<div id="comments">
    <?php 

        $sql = "SELECT * FROM user_details LIMIT 2";
        $results = $conn->query($sql);
        if($results->num_rows > 0):
            while($rows = $results->fetch_assoc()):
                echo "<p>". $rows['username']. "</p>";
                echo "<p>". $rows['first_name']. "</p>";
                echo "<p>". $rows['last_name']. "</p>";
            endwhile;
        endif;
    ?>

</div>
<?php 
?>
<button>Show Users </button>
</body>
</html>