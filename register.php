<?php
// Include the database connection file
include 'db_connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $pwdCheckbox = isset($_POST['pwdCheckbox']) ? 1 : 0;
    $pwdSpecify = $_POST['pwdSpecify'];
    $seniorCitizenCheckbox = isset($_POST['seniorCitizenCheckbox']) ? 1 : 0;
    $medicalConditionsCheckbox = isset($_POST['medicalConditionsCheckbox']) ? 1 : 0;
    $medicalConditions = $_POST['medicalConditions'];
    $password = $_POST['password'];

    // Perform SQL query to insert data into the database
    $sql = "INSERT INTO users (firstName, lastName, age, birthday, sex, address, email, contactNumber, pwdCheckbox, pwdSpecify, seniorCitizenCheckbox, medicalConditionsCheckbox, medicalConditions, password) 
            VALUES ('$firstName', '$lastName', $age, '$birthday', '$sex', '$address', '$email', '$contactNumber', $pwdCheckbox, '$pwdSpecify', $seniorCitizenCheckbox, $medicalConditionsCheckbox, '$medicalConditions', '$password')";

    // Run the query
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<!-- register.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Barangay Health-Care Management System</title>
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
    <a href="#services.php">Services</a>
    <a href="contact.php">Contact</a>
</div>


    <!-- Register Content -->
    <div class="register">
        <h2>Register</h2>
        <!-- Add your registration form here -->
        <form id="registerForm" method="post" action="register.php">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required>
            
            <label for="sex">Sex:</label>
            <select id="sex" name="sex" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <!-- Add more options as needed -->
            </select>
            
            <label for="address">Address:</label>
            <textarea id="address" name="address"  required></textarea>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            
            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contactNumber">
            
            <label for="pwdCheckbox">Are you a Person with Disability (PWD)?</label>
            <input type="checkbox" id="pwdCheckbox" name="pwdCheckbox">

            <label for="pwdSpecify">Specify:</label>
            <textarea id="pwdSpecify" name="pwdSpecify" rows="4"></textarea>

            <label for="seniorCitizenCheckbox">Are you a Senior Citizen?</label>
            <input type="checkbox" id="seniorCitizenCheckbox" name="seniorCitizenCheckbox">

            <label for="medicalConditionsCheckbox">Do you have medical conditions?</label>
            <input type="checkbox" id="medicalConditionsCheckbox" name="medicalConditionsCheckbox">

            <label for="medicalConditions">Specify Medical Conditions:</label>
            <textarea id="medicalConditions" name="medicalConditions" rows="4"></textarea>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
    
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <input type="hidden" id="userId" name="userId">

            <br>
            <button type="submit" onclick="registerUser()">Register</button>
            <p>Already have an account? <a href="login.php">Login here</a></p>
        </form>
    </div>

    <!-- Footer (to be included in every page) -->
    <div class="footer">
        <p>&copy; 2024 Barangay Health-Care Management System</p>
    </div>

</body>
</html>