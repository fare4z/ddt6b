<?php

include 'conn.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_login where username = '$username' and password='$password'";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $username;
    header('Location:profile.php');
} else {
    echo "<script>alert('Wrong Password!');</script>";
    //header('Location:login.php');
}
