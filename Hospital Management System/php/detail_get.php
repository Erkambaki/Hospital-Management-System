<?php
    include("connection.php");
    $ID = $_GET['ID'];
    $sql = "SELECT * FROM em_patient WHERE ID='$ID'";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->error);
    }

    $row = $result->fetch_assoc();
?>