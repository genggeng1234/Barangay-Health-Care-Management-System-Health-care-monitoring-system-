<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $appointmentDate = $_POST['appointmentDate'];
    $reason = $_POST['reason'];
    $message = $_POST['message'];

    $sql = "INSERT INTO appointments (fullName, email, contactNumber, appointmentDate, reason, message) 
            VALUES ('$fullName', '$email', '$contactNumber', '$appointmentDate', '$reason', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "Appointment request submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
