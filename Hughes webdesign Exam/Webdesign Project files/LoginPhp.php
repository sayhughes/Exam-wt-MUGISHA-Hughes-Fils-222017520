<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social_media_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user_information WHERE Username = '$username' AND Password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    
    $_SESSION['username'] = $username;
    header("Location: Homepage.html");
    exit();
} else {
    header("Location: Login.html? $echo=Incorrect Username or Password");
    exit();
}

$conn->close();
?>
