<?php

include 'conn.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO tbl_login (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
