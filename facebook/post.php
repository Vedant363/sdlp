<?php
session_start();
include('db_connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$content = $_POST['content'];
$user_id = $_SESSION['user_id'];

$query = "INSERT INTO posts (user_id, content) VALUES ('$user_id', '$content')";
$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: home.php");
} else {
    echo "Failed to post. <a href='home.php'>Try again</a>.";
}

mysqli_close($conn);
?>
