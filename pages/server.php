<?php

session_start();

//initializing variables

$username = "";
$email = "";

$errors = array();

//connect to database

include '../inc/dbconnect.php';

//register users

if(isset($_POST['reg_user'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    //form validation

    if(empty($username)) {array_push($errors, "Username is required!");}
    if(empty($email)) {array_push($errors, "Email is required!");}
    if(empty($password_1)) {array_push($errors, "Password is required!");}
    if(empty($password_2)) {array_push($errors, "Please confirm your password!");}
    if($password_1 != $password_2) {array_push($errors, "Passwords do not match!");}

    //check db for existing user with same username

    $user_check_query = "SELECT * FROM tbl_user WHERE username = '$username' or email = '$email' LIMIT 1";

    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);

    if($user) {
        if($user['username'] === $username) {array_push($errors, "Username already exists!");}
        if($user['email'] === $email) {array_push($errors, "Email already exists!");}
    }

    //register the user if no error

    if(count($errors) == 0) {

        $password = password_hash($password_1, PASSWORD_DEFAULT); //this will encrypt the password
        $query = "INSERT INTO tbl_user (username, email, password) VALUES ('$username', '$email', '$password')";

        $sql = mysqli_query($db,$query);

        if($sql) {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now registered!";
            header('location: index.php');

        } else {
            $_SESSION['error']= "Data Submit Error! Please try again!";
			header("location: login.php");
        }

    }
}

//login user

if(isset($_POST['login_user'])) {

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);

    if(empty($username)) {array_push($errors, "Username is required");}
    if(empty($password)) {array_push($errors, "Password is required");}

    if(count($errors) == 0) {

        $password = password_hash($password_1, PASSWORD_DEFAULT);
        $query = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
        $sql = mysqli_query($db, $query);

        if($sql) {

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully!";
            header('location: index.php');

        } else {

            array_push($errors, "Wrong username/password combination. Please try again!");
            header('location: login.php');

        }

    }
}