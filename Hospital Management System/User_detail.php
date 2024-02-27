<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="css/registration_custom.css">
    <?php
        include("php/connection.php");
        include("php/user_get.php");
        include("php/session_info.php");
    ?>
</head>
<body>

    <h1 style="display: inline-block"><?php echo $row['Name']; ?></h1>
    <h2>User ID: <?php echo $row['ID']; ?></h2>
    <br>
    <form action="php/user_form.php" method="post">

        <label for="Name">Name</label>
        <input type="text" value=<?php echo $row['Name']; ?> id="Name" Name="Name">
        <label for="Password">Password</label>
        <input type="text" value=<?php echo $row['Password']; ?> id="Password" Name="Password">

        <label for="User_Type">User Type</label>
        <select id="User_Type" Name="User_Type">
            <option value="1" <?php echo $row['User Type'] == 1 ? ' selected ' : ''; ?>>Registration</option>
            <option value="2" <?php echo $row['User Type'] == 2 ? ' selected ' : ''; ?>>Doctor</option>
            <option value="3" <?php echo $row['User Type'] == 3 ? ' selected ' : ''; ?>>Admin</option>
        </select>

        <br>

        <button onclick="confirmation()">Send</button>

    </form>

</body>
    <script type = "text/javascript" src="js/confirmation.js">  </script>
</html>