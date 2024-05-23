<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$servername = "localhost";
$username_db = "root";
$password_db = "";
$database = "social_media_management";

$conn = new mysqli($servername, $username_db, $password_db, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username_session = $_SESSION['username'];
$sql = "SELECT * FROM user_information WHERE username = '$username_session'";
$result = $conn->query($sql);

if (!$result) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $fullName = $row['FullNames'];
    $username = $row['Username'];
    $gender = $row['Gender'];
    $phone = $row['PhoneNumber'];
    $email = $row['Email'];
} else {
    echo "User not found, please try again!";
    $conn->close();
    exit();
}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="DashboardStyle.css">
</head>
<body>
    <header>
        <nav>
            <ul>
            <a href="Homepage.html" class="header-business-logo">
                <img src="logo.png" alt="Hughes Logo">
            </a>
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="AboutUs.html">About Us</a></li>
                <li><a href="OurProducts.html">Our Products</a></li>
                <li><a href="ContactUsphp.php">Contact Us</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="Pricing.html">Pricing</a></li>
                <li><a href="Profilephp.php">Profile & Settings</a></li>
                <li><a href="#" id="logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="user-card">
            <h2>User Dashboard</h2>
            <div class="card-content">
            <h1>Welcome, <?php echo $fullName; ?>!</h1>
                <h4>This is where you can find your account information.</h4>
                <b><p>Username:</b> <?php echo $username; ?></p>
                <b><p>Gender:</b> <?php echo $gender; ?></p>
                <b><p>Phone Number:</b> <?php echo $phone; ?></p>
                <b><p>Email:</b> <?php echo $email; ?></p>
                <p id="pa">Welcome to your personalized dashboard! Once you signedup with your social medias, you'll find a comprehensive overview of your social medias presence and activities. Stay up-to-date with scheduled posts, monitor recent activity on your accounts, and dive deep into analytics to track your performance.</p>
            </main>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <a href="Homepage.html" class="footer-business-logo">
                 <img src="logo.png" alt="Hughes Logo">
            </a>
                
            <div class="social-media">
                <a href="https://www.facebook.com/saytohughes/" class="social-icon"><img src="facebook_icon.jpg" alt="Facebook"></a>
                <a href="https://www.instagram.com/sayhughes/" class="social-icon"><img src="instagram_icon.jpg" alt="Instagram"></a>
                <a href="https://twitter.com/sayhughes/" class="social-icon"><img src="x_icon.png" alt="X"></a>
                <a href="https://www.youtube.com/" class="social-icon"><img src="youtube_icon.png" alt="YouTube"></a>
                <a href="https://www.snapchat.com/" class="social-icon"><img src="snapchat_icon.png" alt="Snapchat"></a>
                <a href="https://github.com/sayhughes" class="social-icon"><img src="gitihub_icon.jpg" alt="GitHub"></a>
            </div>
            <div class="footer-links">
                <p>&copy; 2024 Hughes Social Media Management</p>
                <div class="legal-links">
                    <a href="TermsandConditions.html">Terms & Conditions</a>
                    <a href="PrivacyPolicy.html">Privacy Policy</a>
                    <a href="CookiesPolicy.html">Cookies Policy</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="Dashboardjava.js"></script>
</body>
</html>
