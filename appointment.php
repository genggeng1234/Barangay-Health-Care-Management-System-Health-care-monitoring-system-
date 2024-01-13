<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments - Barangay Health-Care Management System</title>
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

    
<div>
    <div class="appointment" >
        <h2>Request an Appointment</h2>
        <form id="appointmentForm" method="post" action="appointment_process.php">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required autocomplete="off">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required autocomplete="off">

            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contactNumber" required autocomplete="off">

            <label for="appointmentDate">Preferred Appointment Date:</label>
            <input type="date" id="appointmentDate" name="appointmentDate" required autocomplete="off">
            
            <label for="reason">Reason for the Appoinment:</label>
            <select name="reason" id="reason">
            <option value="General Check-up" >General Check-up</option>
            <option value="Regular Check-up" >Regular Check-up</option>
            <option value="Vaccination">Vaccination</option>
            <option value="Dental Check-up">Dental Check-up</option>
            </select>
            
            <label for="message">Additional Information:</label>
            <textarea id="message" name="message" rows="4"></textarea>
            
            <br>
        <div>
            <button type="submit" style="font-size: 15px;">Request Appointment</button>
        </div>
    </form>
</div>
</div>

    <div class="footer">
        <p>&copy; 2024 Barangay Health-Care Management System</p>
    </div>

</body>
    </html>