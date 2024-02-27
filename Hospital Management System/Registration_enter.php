<!DOCTYPE html>
<html>
<head>
    <title>Patient Register</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <link rel="stylesheet" href="css/registration_custom.css">
</head>
<body>

    <h1>Register Patient</h1>
    <br>
    <form action="php/registration_form.php" method="post">

        <label for="Name">Name</label>
        <input type="text" value="Name" id="Name" Name="Name">
        <label for="Surname">Surname</label>
        <input type="text" value="Surname" id="Surname" Name="Surname">
        <label for="Age">Age</label>
        <input type="text" value="Age" id="Age" Name="Age">
        <label for="Institution_Type">Institution Type</label>
        <input type="text" value="Institution type" id="Institution_Type" Name="Institution_Type">

        <label for="Gender">Gender</label>
        <select id="Gender" Name="Gender">
            <option disabled selected value>Choose</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="3">Other</option>
        </select>

        <label for="Transaction">Transaction</label>
        <input type="text" value="Transaction" id="Transaction" Name="Transaction">

        <label for="Department">Department</label>
        <select id="Department" Name="Department">
            <option disabled selected value>Choose</option>
            <option value="1">Emergency</option>
            <option value="2">Eye</option>
            <option value="3">Heart</option>
            <option value="4">Ear</option>
            <option value="5">Dentist</option>
        </select>

        <label for="Created_By">Created By</label>
        <input type="text" value="Created By" id="Created_By" Name="Created_By">
        <label for="Doctor">Doctor</label>
        <input type="text" value="Doctor" id="Doctor" Name="Doctor">

        <label for="Appointment_Date">Appointment Date</label>
        <input type="date" id="Appointment_Date" Name="Appointment_Date">
        <label for="Appointment_Time">Appointment Time</label>
        <input type="time" id="Appointment_Time" Name="Appointment_Time">

        <br>

        <button onclick="confirmation()">Send</button>

    </form>

</body>
    <script type = "text/javascript" src="js/confirmation.js">  </script>
</html>