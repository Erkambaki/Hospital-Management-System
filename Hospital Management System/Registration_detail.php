<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Register</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="css/registration_custom.css">
    <?php
        include("php/connection.php");
        include("php/detail_get.php");
        include("php/session_info.php");
    ?>
</head>
<body>

    <h1 style="display: inline-block"><?php echo $row['Name']; ?></h1>&nbsp;<h1 style="display: inline-block"><?php echo $row['Surname']; ?></h1>
    <h2>Patient ID: <?php echo $row['ID']; ?></h2>
    <br>
    <form action="php/detail_post.php" method="post">

        <label for="Name">Name</label>
        <input type="text" value=<?php echo $row['Name']; ?> id="Name" Name="Name">
        <label for="Surname">Surname</label>
        <input type="text" value=<?php echo $row['Surname']; ?> id="Surname" Name="Surname">
        <label for="Age">Age</label>
        <input type="text" value=<?php echo $row['Age']; ?> id="Age" Name="Age">
        <label for="Institution_Type">Institution Type</label>
        <input type="text" value=<?php echo $row['Institution Type']; ?> id="Institution_Type" Name="Institution_Type">

        <label for="Gender">Gender</label>
        <select id="Gender" Name="Gender">
            <option value="1" <?php echo $row['Gender'] == 1 ? ' selected ' : ''; ?>>Male</option>
            <option value="2" <?php echo $row['Gender'] == 2 ? ' selected ' : ''; ?>>Female</option>
            <option value="3" <?php echo $row['Gender'] == 3 ? ' selected ' : ''; ?>>Other</option>
        </select>

        <label for="Transaction">Transaction</label>
        <input type="text" value=<?php echo $row['Transaction']; ?> id="Transaction" Name="Transaction">

        <label for="Department">Department</label>
        <select id="Department" Name="Department">
            <option value="1" <?php echo $row['Department'] == 1 ? ' selected ' : ''; ?>>Emergency</option>
            <option value="2" <?php echo $row['Department'] == 2 ? ' selected ' : ''; ?>>Eye</option>
            <option value="3" <?php echo $row['Department'] == 3 ? ' selected ' : ''; ?>>Heart</option>
            <option value="4" <?php echo $row['Department'] == 4 ? ' selected ' : ''; ?>>Ear</option>
            <option value="5" <?php echo $row['Department'] == 5 ? ' selected ' : ''; ?>>Dentist</option>
        </select>

        <label for="Created_By">Created By</label>
        <input type="text" value=<?php echo $row['Created By']; ?> id="Created_By" Name="Created_By">
        <label for="Doctor">Doctor</label>
        <input type="text" value=<?php echo $row['Doctor']; ?> id="Doctor" Name="Doctor">

        <label for="Appointment_Date">Appointment Date</label>
        <input type="date" value=<?php echo date('Y-m-d'); ?> id="Appointment_Date" Name="Appointment_Date">
        <label for="Appointment_Time">Appointment Time</label>
        <input type="text" value=<?php echo $row['Appointment Time']; ?> id="Appointment_Time" Name="Appointment_Time">

        <br>

        <button onclick="confirmation()">Send</button>

    </form>

</body>
    <script type = "text/javascript" src="js/confirmation.js">  </script>
</html>