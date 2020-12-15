<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <section class="USP">
    <i class="bi bi-book"></i>
    <p>Deserunt aliquip cupidatat laboris et excepteur aute deserunt Lorem sint proident pariatur fugiat.</p>

    </section>
</header>
<main>

</main>
<footer>

</footer>

<?php
    require 'inc/dbconnect.php';
?>
    <form id="app-login" action="./pages/login.php" method="POST">
        <fieldset>
            <legend>Login Details</legend>
            <div>
                <label for="username">Username:</label>
                <input name="username" type="text" placeholder="Your username is your email address" required autofocus>
            </div>
            <div>
                <label for="password">Password:</label>
                <input name="password" type="password" placeholder="6 digits, a combination of numbers and letters" required>
            </div>
            <div>
                <input name="login" type="submit" value="Login">
            </div>
        </fieldset>
    </form>
    
</body>
</html>