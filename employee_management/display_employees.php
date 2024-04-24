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

// Fetch employees from database
$sql = "SELECT id, name, email, phone, department FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone: " . $row["phone"]. " - Department: " . $row["department"]. "<br>";
    }
} else {
    echo "No employees found";
}

$conn->close();
?>
