<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: cursive;
        }

        body {
            margin-top: 100px;
            background-color: aquamarine;
            text-align: center;
        }

        #display-info {
            width: 60%;
            margin: auto;
            background-color: white;
            color: black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
            font-size: large;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: black;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
        }

        a:hover {
            background-color: white;
            color: black;
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Employee_first_name = $_POST['efirstname'];
        $Employee_last_name = $_POST['elastname'];
        $Employee_current_company = $_POST['eccompany'];
        $Employee_past_company = $_POST['epcompany'];
        $Employee_experience = $_POST['eexperience'];
        $Employee_salary = $_POST['esalary'];
        $Employee_email = $_POST['eemail'];
        $Employee_gender = $_POST['gender'];
        $Employee_birth_date = $_POST['ebdate'];
        $Employee_address = $_POST['eaddress'];

        echo "
        <div id='display-info'>
            <h2>Employee Information</h2>
            <p><b>First Name:</b> $Employee_first_name</p>
            <p><b>Last Name:</b> $Employee_last_name</p>
            <p><b>Current Company:</b> $Employee_current_company</p>
            <p><b>Past Company:</b> $Employee_past_company</p>
            <p><b>Experience:</b> $Employee_experience years</p>
            <p><b>Salary:</b> ₹$Employee_salary</p>
            <p><b>Email:</b> $Employee_email</p>
            <p><b>Gender:</b> $Employee_gender</p>
            <p><b>Birth Date:</b> $Employee_birth_date</p>
            <p><b>Address:</b> $Employee_address</p>
        </div>
        ";
    } else {
        echo "<h2>No data received. Please fill out the form first.</h2>";
    }
    ?>

    <a href="8.1.1.php">Go Back</a>

</body>

</html>
