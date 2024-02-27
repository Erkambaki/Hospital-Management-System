<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Details</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link href="css/registration_custom.css" rel="stylesheet">
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
    <form action="php/detail_form.php" method="post">

        <label for="Complaint">Complaint</label>
        <textarea id="Complaint" name="Complaint"><?php echo $row['Complaint']; ?></textarea>
        <br>
        <label for="Medical_History">Medical History</label>
        <textarea id="Medical_History" name="Medical_History"><?php echo $row['Medical History']; ?></textarea>
        <br>
        <label for="Physical_Examination">Physical Examination</label>
        <textarea id="Physical_Examination" name="Physical_Examination"><?php echo $row['Physical Examination']; ?></textarea>
        <br>
        <label for="Diagnosis">Diagnosis</label>
        <textarea id="Diagnosis" name="Diagnosis"><?php echo $row['Diagnosis']; ?></textarea>
        <br>
        <label for="Decision">Decision</label>
        <textarea id="Decision" name="Decision"><?php echo $row['Decision']; ?></textarea>

        <br>

        <button onclick="confirmation()">Send</button>

    </form>

</body>
    <script type = "text/javascript" src="js/confirmation.js">  </script>
</html>