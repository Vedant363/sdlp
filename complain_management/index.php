<?php
// index.php

// Include the PHP script to establish a connection to the database
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Complaint Management System</h1>
        <form action="submit_complaint.php" method="POST">
            <textarea name="complaint" placeholder="Enter your complaint" required></textarea>
            <button type="submit">Submit Complaint</button>
        </form>
        
        <h2>Complaints</h2>
        <div class="complaints-list">
            <?php 
            // Include the PHP script to display complaints
            include 'show_complaints.php'; 
            ?>
        </div>
    </div>
</body>
</html>
