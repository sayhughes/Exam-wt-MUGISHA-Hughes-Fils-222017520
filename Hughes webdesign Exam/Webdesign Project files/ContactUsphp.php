<!-- ContactUs.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Social Media Management</title>
    <link rel="stylesheet" href="ContactUsStyle.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <a href="Homepage.html" class="header-business-logo">
                    <img src="logo.png" alt="Hughes Logo">
                </a>
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="OurProducts.html">Our Products</a></li>
                <li><a href="ContactUsphp.php">Contact Us</a></li>
                <li><a href="Dashboardphp.php">Dashboard</a></li>
                <li><a href="Pricing.html">Pricing</a></li>
                <li><a href="Profilephp.php">Profile & Settings</a></li>
                <li><a href="#" id="logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact-us">
            <h1>Contact Us</h1>
            <div class="contact-info">
                <h2>Our Office</h2>
                <p><b>Address:</b> Kigali,Rwanda Gasabo St 255</p>
                <p><b>Phone:</b> (250) 785817551</p>
                <p><b>Email:</b> sayhughes@lockrmail.com</p>
            </div>
            <h2>Get in Touch</h2>
            <form action="ContactUsphp.php" method="POST">
                <div class="form-group">
                    <label for="fullname">Your Names:</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </section>
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
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "social_media_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL statement
    $sql = "INSERT INTO contacted_user (FullNames, Email, message) VALUES ('$fullname', '$email', '$message')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        // Data inserted successfully
        echo "<h2>Thank you, $fullname!</h2>";
        echo "<p>We received your message:</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Message: $message</p>";
    } else {
        // Error inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

