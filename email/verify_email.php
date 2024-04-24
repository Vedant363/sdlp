<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email from the form
    $email = $_POST['email'];

    // Validate email format using PHP filter_var function
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is valid: " . $email;
    } else {
        echo "Invalid email format";
    }
}
?>
