<?php
include 'config.php';

if(isset($_POST['complaint'])) {
    $complaint = $_POST['complaint'];

    $sql = "INSERT INTO complaints (complaint) VALUES ('$complaint')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
