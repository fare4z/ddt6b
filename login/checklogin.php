<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "abc123") {

    $_SESSION['username'] = $username;
    header('Location: ../profile.php');
} else {
    header('Location:login.php');
}
