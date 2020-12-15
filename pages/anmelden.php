<?php
    require 'inc/dbconnect.php';
?>
    <form id="app-login" action="./pages/meinkonto.php" method="POST">
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