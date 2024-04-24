<?php
include 'config.php';

$sql = "SELECT * FROM complaints";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="complaint';
        if($row['resolved']) {
            echo ' resolved';
        }
        echo '">';
        echo $row['complaint'];
        if(!$row['resolved']) {
            echo '<a href="resolve_complaint.php?id=' . $row['id'] . '">Resolve</a>';
        }
        echo '</div>';
    }
} else {
    echo "No complaints yet.";
}

mysqli_close($conn);
?>
