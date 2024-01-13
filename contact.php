<!-- contact.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Barangay Health-Care Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="navbar">
    <a href="index.php">Home</a>
    <?php
    session_start();
        if (isset($_SESSION['user'])) {
            echo '<a href="profile.php">Profile</a>';
            echo '<a href="family.php">Family</a>';
            echo '<a href="appointment.php">Appointment</a>';
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Login</a>';
        }
    ?>
    <a href="services.php">Services</a>
    <a href="contact.php">Contact</a>
</div>

    <div class="contact">
        <h2>Contact Us</h2>
        <p>If you have any questions or need assistance, feel free to reach out to us:</p>
        <ul>
            <li>Email: info@healthcarefacility.com</li>
            <li>Phone: +123 456 7890</li>
            <li>Address: 123 Main St, City</li>
        </ul>

        <h3>Send us a Message</h3>
        <form id="contactForm" method="post" action="contact_process.php">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <br>
            <button type="submit">Send Message</button>
        </form>
    </div>
    <div class="services">
        <h2>Healthcare Services</h2>
        <ul>
            <li>General Check-ups</li>
            <li>Vaccinations</li>
            <li>Emergency Care</li>
            <li>Chronic Disease Management</li>
        </ul>

        <p>Our healthcare services aim to provide comprehensive care to the community, focusing on both prevention and treatment. We strive to ensure the well-being of every individual.</p>
    </div>
    <div class="footer">
        <p>&copy; 2024 Barangay Health-Care Management System</p>
    </div>

</body>
</html>