<?php
session_start();

// Hardcoded admin credentials
$admin_username = "admin";
$admin_password = "admin123";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if credentials are correct
    if ($username == $admin_username && $password == $admin_password) {
        // Set session variables
        $_SESSION["username"] = $username;

        // Redirect to admin panel
        header("Location: admin_panel.php");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>
