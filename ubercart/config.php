<?php
$servername = "localhost";
$username = "root";
$password = "ved363";
$dbname = "ubercart";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>