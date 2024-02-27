<?php
    include("connection.php");
    $Name = $_POST["Name"];
    $Password = $_POST["Password"];
    $User_Type = filter_input(INPUT_POST, "User_Type", FILTER_VALIDATE_INT);   
            
    $sql = "INSERT INTO user_info (`Name`, `Password`, `User Type`) VALUES (?, ?, ?)";

    $stmt = mysqli_stmt_init($connection);

    if (!mysqli_stmt_prepare($stmt, $sql)) {

        die(mysqli_error($connection));
    }

    mysqli_stmt_bind_param($stmt, "ssi",
                        $Name,
                        $Password,
                        $User_Type);

    mysqli_stmt_execute($stmt);

    header("Location: ../User_main.php");
?>