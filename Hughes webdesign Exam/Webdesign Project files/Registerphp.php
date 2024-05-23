<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social_media_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user_information (FullNames,Username,Gender,PhoneNumber,Email,Password) VALUES ('$fullname','$username','$gender','$phone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: Login.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
