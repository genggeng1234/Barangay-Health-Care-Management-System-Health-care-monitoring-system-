
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Family- Barangay Health-Care Management System</title>
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
<form>
<div class="family">
        <h2>Add Family</h2>
        <form id="addFamilyForm" method="post" action="addFamily.php">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday" required>
            
            <label for="relationship">Relationship:</label>
            <select id="relationship" name="relationship" required>
                <option value="Mother">Mother</option>
                <option value="Father">Father</option>
                <option value="Sibling">Sibling</option>
                <option value="Spouse">Spouse</option>
                <option value="Offspring">Offspring</option>
            </select>
            
            <label for="sex">Sex:</label>
            <select id="sex" name="sex" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            
            <label for="address">Address:</label>
            <textarea id="address" name="address"  required></textarea>
            
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
            
            <br>
            <button type="submit" >Add Family</button>
        </form>
    </div>

    </body>
</div>
    <div class="footer">
        <p>&copy; 2024 Barangay Health-Care Management System</p>
        </div>
     
    
</body>  
</html>

