<?php
    include 'db_connection.php';
    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location: login.html");
        exit();
    }

    $userId = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE userId = $userId";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $user = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
<!-- profile.html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Barangay Health-Care Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="navbar">
    <a href="index.php">Home</a>
    <?php
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
<form>
    <!-- Profile Content -->
    <div>
    </div><div class="profile">
        <h2>User Profile</h2>
        <!-- Display user information -->
        <div class="editable">
            <label for="firstName">First Name:</label>
            <span id="firstName"><?php echo $user['firstName']; ?></span>
            <input type="text" id="editFirstName" name="editFirstName" value="<?php echo $user['firstName']; ?>" style="display: none;">
        </div>
        <div class="editable">
            <label for="lastName">Last Name:</label>
            <span id="lastName"><?php echo $user['lastName']; ?></span>
        </div>
        <div class="editable">
            <label for="age">Age:</label>
            <span id="age"><?php echo $user['age']; ?></span>
        </div>
        <div class="editable">
            <label for="birthday">Birthday:</label>
            <span id="birthday"><?php echo $user['birthday']; ?></span>
        </div>
        <div class="editable">
            <label for="sex">Sex:</label>
            <span id="sex"><?php echo $user['sex']; ?></span>
        </div>
        <div class="editable">
            <label for="address">Address:</label>
            <span id="address"><?php echo $user['address']; ?></span>
        </div>
        <div class="editable">
            <label for="email">Email:</label>
            <span id="email"><?php echo $user['email']; ?></span>
        </div>
        <div class="editable">
            <label for="contactNumber">Contact Number:</label>
            <span id="contactNumber"><?php echo $user['contactNumber']; ?></span>
        </div>
        <div class="editable">
            <label for="pwdCheckbox">PWD:</label>
            <span id="pwdCheckbox"><?php echo ($user['pwdCheckbox'] ? 'Yes' : 'No'); ?></span>
        </div>
        <div class="editable">
            <label for="seniorCitizenCheckbox">Senior Citizen:</label>
            <span id="seniorCitizenCheckbox"><?php echo ($user['seniorCitizenCheckbox'] ? 'Yes' : 'No'); ?></span>
        </div>
        <div class="editable">
            <label for="medicalConditionsCheckbox">Medical Conditions:</label>
            <span id="medicalConditionsCheckbox"><?php echo ($user['medicalConditionsCheckbox'] ? 'Yes' : 'No'); ?></span>
        </div>
        <div class="editable">
            <label for="medicalConditions">Specify Medical Conditions:</label>
            <span id="medicalConditions"><?php echo $user['medicalConditions']; ?></span>
        </div>
        
        <div class="change-password">
            <h3>Change Password</h3>
            <form id="changePasswordForm">
                <label for="currentPassword">Current Password:</label>
                <input type="password" id="currentPassword" name="currentPassword" required>
    
                <label for="newPassword">New Password:</label>
                <input type="password" id="newPassword" name="newPassword" required>
    
                <label for="confirmPassword">Confirm New Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
    <br>
                <button type="submit">Change Password</button>
            </form>
        </div>
        <button>Edit Profile</button>
<input type="hidden" id="userId" value="<?php echo json_encode($_SESSION['user_id']); ?>">

</div> 
    <div class="footer">
        <p>&copy; 2024 Barangay Health-Care Management System</p>
    </div>

</body>  
</html>

