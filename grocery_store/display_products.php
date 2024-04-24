<?php
include 'db_connection.php';

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Display products
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Price: $" . $row["price"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
