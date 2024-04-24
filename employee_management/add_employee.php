<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "ved363";
$dbname = "employee_management";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from form
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$department = $_POST['department'];

// Insert data into employees table
$sql = "INSERT INTO employees (name, email, phone, department) VALUES ('$name', '$email', '$phone', '$department')";

if ($conn->query($sql) === TRUE) {
    echo "Employee added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
