<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $sql = "SELECT * FROM users WHERE email = '$loginEmail' AND password = '$loginPassword'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            session_start();

            $user = mysqli_fetch_assoc($result);

            $_SESSION['user'] = $user['email'];
            $_SESSION['user_id'] = $user['userId'];

            header("Location: profile.php");
            exit();
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

