<?php
// Establish database connection (change these parameters according to your database configuration)
$servername = "localhost";
$username = "root";
$password = "ved363";
$dbname = "cookie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user's name from the form
if(isset($_POST['name'])) {
    $name = $_POST['name'];

    // Check if the name already exists in the database
    $sql_check = "SELECT * FROM users WHERE name = '$name'";
    $result_check = $conn->query($sql_check);

    if ($result_check->num_rows > 0) {
        echo "Name already exists in the database.";
    } else {
        // Create a cookie with the user's name
        setcookie("user", $name, time() + (86400 * 30), "/"); // Cookie will expire in 30 days

        // Insert the user's name into the database
        $sql = "INSERT INTO users (name) VALUES ('$name')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
