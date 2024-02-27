<?php
    include("php/connection.php");

    // read from database table
    $sql = "SELECT `ID`, `Name`, `User Type`, `Password` FROM user_info";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->error);
    }

    // read data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr class='clickable-row' data-href='User_detail.php?ID={$row['ID']}'>
            <td>" . $row["ID"] . "</td>
            <td>" . $row["Name"] . "</td>
            <td>" . $row["User Type"] . "</td>
            <td>" . $row["Password"] . "</td>
        </tr>";
    }
?>