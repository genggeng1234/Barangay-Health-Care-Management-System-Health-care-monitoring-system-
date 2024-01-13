<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthcare Services - Barangay Health-Care Management System</title>
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