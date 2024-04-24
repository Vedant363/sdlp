<?php
session_start();
include('db_connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' OR email='$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    header("Location: home.php");
} else {
    echo "Invalid username/email or password. <a href='login.html'>Try again</a>.";
}

mysqli_close($conn);
?>
