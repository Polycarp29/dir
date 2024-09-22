<!-- form.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit User Details</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Submit Your Details</h2>
        <?php
            // CSRF token generation
            session_start();
            if (!isset($_SESSION['token'])) {
                $_SESSION['token'] = bin2hex(random_bytes(32));
            }
        ?>
        <form action="submit.php" method="post">
            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
