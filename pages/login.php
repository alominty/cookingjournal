<?php include 'server.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>Log in</h2>
        </div>

        <form action="login.php" method="post">

            <?php include 'errors.php'; ?>

            <div>
                <label for="username">Username: </label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password_1">Password: </label>
                <input type="password" name="password_1" required>
            </div>

            <button type="submit" name="login_user">Submit</button>

            <p>Not a user? <a href="./registration.php"><b>Register here</b></a>
        
        </form>
    </div>
    
</body>
</html>