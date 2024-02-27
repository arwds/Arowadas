<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set your password here
    $password = "your_password_here";

    // Get the entered password
    $entered_password = $_POST["password"];

    // Check if the entered password matches
    if ($entered_password == $password) {
        // Password is correct, set a session variable
        $_SESSION["authenticated"] = true;

        // Redirect to the protected page
        header("Location: protected_page.php");
        exit();
    } else {
        // Password is incorrect, redirect back to the login page
        header("Location: index.html");
        exit();
    }
}