<?php
include 'config.php';

if(isset($_GET['id'])) {
    $complaint_id = $_GET['id'];

    $sql = "UPDATE complaints SET resolved=1 WHERE id=$complaint_id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
