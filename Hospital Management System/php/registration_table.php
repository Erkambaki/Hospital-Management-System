<?php
    include("php/connection.php");

    // read from database table
    $sql = "SELECT `ID`, `Name`, `Surname`, `Age`, `Institution Type`, `Gender`, `Transaction`, `Department`, `Created By`, `Doctor`, `Appointment Date`, `Appointment Time`, DENSE_RANK() OVER(ORDER BY `Name`, `Surname` DESC) Patient_ID FROM em_patient";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->error);
    }

    // read data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr class='clickable-row' data-href='Registration_detail.php?ID={$row['ID']}'>
            <td>" . $row["ID"] . "</td>
            <td>" . $row["Patient_ID"] . "</td>
            <td>" . $row["Name"] . "</td>
            <td>" . $row["Surname"] . "</td>
            <td>" . $row["Age"] . "</td>
            <td>" . $row["Institution Type"] . "</td>
            <td>" . $row["Gender"] . "</td>
            <td>" . $row["Transaction"] . "</td>
            <td>" . $row["Department"] . "</td>
            <td>" . $row["Created By"] . "</td>
            <td>" . $row["Doctor"] . "</td>
            <td>" . $row["Appointment Date"] . "</td>
            <td>" . $row["Appointment Time"] . "</td>
        </tr>";
    }
?>