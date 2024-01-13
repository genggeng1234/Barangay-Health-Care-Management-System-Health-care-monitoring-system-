<?php
    session_start();
    // Destroy the session to log the user out
    session_destroy();
    // Redirect to the home page or any other desired page after logout
    header("Location: index.php");
    exit();
?>
