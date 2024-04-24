<?php
// Include database connection
include_once 'db_connection.php';

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$dob = $_POST['dob'];

// Prepare SQL statement
$sql = "INSERT INTO students (name, email, phone, address, dob) VALUES (?, ?, ?, ?, ?)";

// Prepare and execute statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $name, $email, $phone, $address, $dob);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Registration successful!";
} else {
    echo "Error: " . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
