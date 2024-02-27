<?php
    session_start();
    include("connection.php");
    $Complaint = $_POST["Complaint"];
    $Medical_History = $_POST["Medical_History"];
    $Physical_Examination = $_POST["Physical_Examination"];
    $Diagnosis = $_POST["Diagnosis"];
    $Decision = $_POST["Decision"];    
            
    $sql = "UPDATE em_patient SET `Complaint`=?, `Medical History`=?, `Physical Examination`=?, `Diagnosis`=?, `Decision`=? WHERE `ID`='".$_SESSION['ID']."'";

    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {

        die(mysqli_error($connection));
    }

    mysqli_stmt_bind_param($stmt, "sssss",
                        $Complaint,
                        $Medical_History,
                        $Physical_Examination,
                        $Diagnosis,
                        $Decision);

    mysqli_stmt_execute($stmt);

    header("Location: ../Doctor_main.php");
?>