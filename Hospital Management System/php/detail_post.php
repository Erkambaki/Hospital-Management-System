<?php
    session_start();
    include("connection.php");
    $Name = $_POST["Name"];
    $Surname = $_POST["Surname"];
    $Age = $_POST["Age"];
    $Institution_Type = $_POST["Institution_Type"];
    $Gender = filter_input(INPUT_POST, "Gender", FILTER_VALIDATE_INT);
    $Transaction = $_POST["Transaction"];    
    $Department = filter_input(INPUT_POST, "Department", FILTER_VALIDATE_INT);  
    $Created_By = $_POST["Created_By"];    
    $Doctor = $_POST["Doctor"];    
    $Appointment_Date = $_POST["Appointment_Date"];
    $Appointment_Time = $_POST["Appointment_Time"];    
            
    $sql = "UPDATE em_patient SET `Name`=?, `Surname`=?, `Age`=?, `Institution Type`=?, `Gender`=?, `Transaction`=?, `Department`=?, `Created By`=?, `Doctor`=?, `Appointment Date`=?, `Appointment Time`=? WHERE `ID`='".$_SESSION['ID']."'";

    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {

        die(mysqli_error($connection));
    }

    mysqli_stmt_bind_param($stmt, "ssssisissss",
                        $Name,
                        $Surname,
                        $Age,
                        $Institution_Type,
                        $Gender,
                        $Transaction,
                        $Department,
                        $Created_By,
                        $Doctor,
                        $Appointment_Date,
                        $Appointment_Time);

    mysqli_stmt_execute($stmt);

    header("Location: ../Registration_main.php");
?>