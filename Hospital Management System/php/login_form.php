<?php 
include "connection.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['type'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $username = validate($_POST['username']);
    $pass = validate($_POST['password']);
    $type = validate($_POST['type']);

    if (empty($username)) {

        header("Location: ../index.php?error=Username is required");
        exit();

    }else if(empty($pass)){

        header("Location: ../index.php?error=Password is required");
        exit();

    }else if(empty($type)){

        header("Location: ../index.php?error=Password is required");
        exit();

    }else{

        $sql = "SELECT * FROM user_info WHERE `Name`='$username' AND `Password`='$pass' AND `User Type`='$type'";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['Name'] === $username && $row['Password'] === $pass && $row['User Type'] == 1) {

                header("Location: ../Registration_main.php");
                exit();
                
            } else if ($row['Name'] === $username && $row['Password'] === $pass && $row['User Type'] == 2) {

                header("Location: ../Doctor_main.php");
                exit();

            } else if ($row['Name'] === $username && $row['Password'] === $pass && $row['User Type'] == 3) {

                header("Location: ../Admin_main.php");
                exit();
            }

        }else{

            header("Location: ../index.php?error=Incorrect Username or password");
            exit();
        }
    }

}else{

    header("Location: ../index.php");
    exit();
}