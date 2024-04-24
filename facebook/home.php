<?php
session_start();
include('db_connection.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$query = "SELECT * FROM posts";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to Facebook Clone</h1>
    <h2>Posts</h2>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div>
            <p><?php echo $row['content']; ?></p>
            <small>Posted by: <?php echo $row['user_id']; ?></small>
        </div>
    <?php } ?>
    <h2>Create Post</h2>
    <form action="post.php" method="post">
        <textarea name="content" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Post">
    </form>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
mysqli_close($conn);
?>
