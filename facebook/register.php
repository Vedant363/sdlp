<?php
include('db_connection.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Registration successful! Please <a href='login.html'>login</a> to continue.";
} else {
    echo "Registration failed. Please try again.";
}

mysqli_close($conn);
?>
