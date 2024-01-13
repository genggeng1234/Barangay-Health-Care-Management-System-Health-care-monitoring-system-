<!-- login.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Barangay Health-Care Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation Bar (to be included in every page) -->
<!-- Replace the existing navbar code with the following in your HTML files -->
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
<script>
        function loginUser() {
            var email = document.getElementById('loginEmail').value;
            var password = document.getElementById('loginPassword').value;

            var formData = new FormData();
            formData.append('loginEmail', email);
            formData.append('loginPassword', password);

            var xhr = new XMLHttpRequest();

            xhr.open('POST', 'login_process.php', true);

            xhr.onload = function() {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                } else {
                    console.error('Login failed. Status: ' + xhr.status);
                    alert('Login failed. Please check your email and password.');
                }
            };

            xhr.send(formData);
        }
    </script>

<div class="login">
    <h2>Login</h2>
    <form id="loginForm" method="post" action="login_process.php">
        <label for="loginEmail">Email:</label>
        <input type="email" id="loginEmail" name="loginEmail" required>

        <label for="loginPassword">Password:</label>
        <input type="password" id="loginPassword" name="loginPassword" required>

        <br>
        <button type="submit" onclick="loginUser()">Login</button>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </form>
</div>

    <!-- Footer (to be included in every page) -->
    <div class="footer">
        <p>&copy; 2024 Barangay Health-Care Management System</p>
    </div>

   
</body>
</html>