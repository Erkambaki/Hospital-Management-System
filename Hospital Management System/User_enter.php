<!DOCTYPE html>
<html>
<head>
    <title>Enter User</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="css/registration_custom.css">
</head>
<body>

    <h1>Enter User</h1>
    <br>
    <form action="php/enter_form.php" method="post">

        <label for="Name">Name</label>
        <input type="text" value="Name" id="Name" Name="Name">
        <label for="Password">Password</label>
        <input type="text" value="Password" id="Password" Name="Password">

        <label for="User_Type">User Type</label>
        <select id="User_Type" Name="User_Type">
            <option disabled selected value>Choose</option>
            <option value="1">Registration</option>
            <option value="2">Doctor</option>
            <option value="3">Admin</option>
        </select>

        <br>

        <button onclick="confirmation()">Send</button>

    </form>

</body>
    <script type = "text/javascript" src="js/confirmation.js">  </script>
</html>