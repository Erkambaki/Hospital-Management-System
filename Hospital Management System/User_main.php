<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/Patient_list.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

</head>
<body>
    <h1>List of Users</h1>
    <br>
    <div class="container">
        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>User Type</th>
                    <th>Password</th>
                </tr>
            </thead>

            <tbody>
                <?php include("php/user_table.php"); ?>
            </tbody>
        </table>
    </div>
    <br>
    <button class="btn" onclick="location.href='User_enter.php'">Enter User</button>
</body>
    <script type = "text/javascript" src="js/table_config.js">  </script>
</html>