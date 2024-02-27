<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

<div id="login-form-wrap">
    <h2>Welcome</h2>
    <?php if (isset($_GET['error'])) { ?>

    <p class="error"><?php echo $_GET['error']; ?></p>

    <?php } ?>
    <form id="login-form" action="php/login_form.php" method="post">
    <p>
        <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
        <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
        <select class="select-type" id="type" Name="type">
            <option disabled selected value>Login Type</option>
            <option value="1">Registration</option>
            <option value="2">Doctor</option>
            <option value="3">Admin</option>
        </select>
    </p>
    <p>
        <input type="submit" id="login" value="Login">
    </p>
    </form>
<div id="create-account-wrap">
    <p>Hospital Management System</a><p>
</div>
</div>

</body>
</html>