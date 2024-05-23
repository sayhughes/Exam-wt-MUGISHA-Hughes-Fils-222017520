<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($newPassword !== $confirmPassword) {
        echo "New password and confirm password do not match.";
        exit();
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "social_media_management";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $_SESSION['username'];
    $sql = "SELECT * FROM user_information WHERE username = '$username' AND password = '$oldPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $sql_update = "UPDATE user_information SET password = '$newPassword' WHERE username = '$username'";
        if ($conn->query($sql_update) === TRUE) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "Incorrect old password.";
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="DashboardStyle.css">
</head>
<body>
    <div class="change-password-form">
    <form class="reset-form" action="Reset_password.php" method="post">
    <h2>Change your Password</h2>
    <div class="form-group">
        <label for="old_password">Old Password:</label>
        <input type="password" id="old_password" name="old_password" required>
    </div>
    <div class="form-group">
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
    </div>
    <button type="submit" id="Reset-btn" name="change_password">Change Your Password</button>
</form>
    </div>
</body>
</html>
