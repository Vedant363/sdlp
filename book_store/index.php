<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "ved363";
$dbname = "bookstore";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add book
if(isset($_POST['add_book'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $price = $_POST['price'];

    $sql = "INSERT INTO books (title, author, price) VALUES ('$title', '$author', $price)";
    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Remove book
if(isset($_POST['remove_book'])) {
    $book_id = $_POST['book_id'];

    $sql = "DELETE FROM books WHERE id = $book_id";
    if ($conn->query($sql) === TRUE) {
        echo "Book removed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Query to retrieve books
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalog</title>
</head>
<body>
    <h1>Book Catalog</h1>
    <h2>Add Book</h2>
    <form method="post">
        Title: <input type="text" name="title" required><br>
        Author: <input type="text" name="author" required><br>
        Price: <input type="number" step="0.01" name="price" required><br>
        <input type="submit" name="add_book" value="Add Book">
    </form>
    <h2>Remove Book</h2>
    <form method="post">
        Book ID: <input type="number" name="book_id" required><br>
        <input type="submit" name="remove_book" value="Remove Book">
    </form>
    <h2>Book List</h2>
    <ul>
        <?php
        // Display books
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["title"] . " by " . $row["author"] . " - $" . $row["price"] . "</li>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </ul>
</body>
</html>
