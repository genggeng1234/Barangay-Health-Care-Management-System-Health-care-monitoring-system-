<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "last";
    
    $conn = mysqli_connect($host, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $relationship = $_POST['relationship'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $pwdCheckbox = isset($_POST['pwdCheckbox']) ? 1 : 0;
    $pwdSpecify = $_POST['pwdSpecify'];
    $seniorCitizenCheckbox = isset($_POST['seniorCitizenCheckbox']) ? 1 : 0;
    $medicalConditionsCheckbox = isset($_POST['medicalConditionsCheckbox']) ? 1 : 0;
    $medicalConditions = $_POST['medicalConditions'];

    $sql = "INSERT INTO family (firstName, lastName, age, birthday, relationship, sex, address, pwdCheckbox, pwdSpecify, seniorCitizenCheckbox, medicalConditionsCheckbox, medicalConditions)
            VALUES ('$firstName', '$lastName', '$age', '$birthday', '$relationship', '$sex', '$address', '$pwdCheckbox', '$pwdSpecify', '$seniorCitizenCheckbox', '$medicalConditionsCheckbox', '$medicalConditions')";

    if ($conn->query($sql) === TRUE) {
        echo "Family member added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
