<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <style>
        body {
            background-color: beige;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 700px;
            margin: 50px auto;
            background-color: #ddd;
            border-radius: 10px;
            box-shadow: 0px 0px 20px #aaa;
            padding: 30px;
        }
        h1 {
            text-align: center;
            background-color: #aaa;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            margin: -30px -30px 20px -30px;
        }
        b {
            color: #444;
        }
        .details {
            padding: 10px 0;
            font-size: 18px;
        }
        .details span {
            font-weight: bold;
            color: #333;
        }
        .box {
            background-color: #fff;
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 5px;
            margin-bottom: 15px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .error {
            width: 500px;
            color: red;
            text-align: center;
            margin-top: 20%;
            border: 1px solid #fff;
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            margin-left: 35%;
            box-shadow: 0px 0px 10px black;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $currcomp = $_POST['currcomp'];
    $pastcomp = $_POST['pastcomp'];
    $exp = $_POST['exp'];
    $salary = $_POST['salary'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $gender = ($_POST['gender']);

    $mobileregex = "/^[6-9][0-9]{9}$/";  
    $emailregex = "/^[a-z\d._%+-]+@[a-z\d.-]+\.[a-z]{2,}$/"; 

    $error = false;
    $errorMessages = [];


    if (empty($fname) || empty($lname) || empty($currcomp) || empty($email) || empty($mobileno)) {
        $errorMessages[] = "Please fill all required fields.";
        $error = true;
    }
    
    if (!ctype_alpha($fname) || !ctype_alpha($lname)) {
        $errorMessages[] = "First and last names must contain only letters.";
        $error = true;
    }
    
    if (!is_numeric($mobileno) || !preg_match($mobileregex, $mobileno)) {
        $errorMessages[] = "Mobile number must be a valid 10-digit number starting with 6-9.";
        $error = true;
    }
    
    if (!is_numeric($exp) || $exp < 0) {
        $errorMessages[] = "Experience must be a non-negative number.";
        $error = true;
    }
    
    if (!preg_match($emailregex, $email)) {
        $errorMessages[] = "Please enter a valid email address.";
        $error = true;
    }
    
    if (!is_numeric($salary) || $salary < 0) {
        $errorMessages[] = "Salary must be a non-negative number.";
        $error = true;
    }
    
    if (empty($pastcomp)) {
        $pastcomp = "-";  
    }

    if ($error) {
        echo "<div class='error'>";
        echo "<h2>Error(s) Found!</h2>";
        foreach ($errorMessages as $message) {
            echo "<b>ERROR:</b> <span>$message</span><br>";
        }
        echo "</div>";
    } else {
        echo "
        <div class='container'>
            <h1>Here's Your Details</h1>
            <div class='details'>
                <div class='box'><b>Name:</b> $fname $lname</div>
                <div class='box'><b>Current Company:</b> $currcomp</div>
                <div class='box'><b>Past Company:</b> $pastcomp</div>";
        
        echo "<div class='box'><b>Experience:</b> $exp " . ($exp == 1 ? "year" : "years") . "</div>";
        
        echo "
                <div class='box'><b>Salary:</b> ₹$salary</div>
                <div class='box'><b>Email:</b> $email</div>
                <div class='box'><b>Phone No.:</b> +91$mobileno</div>";
        
        if (!empty($gender)) {
            echo "<div class='box'><b>Gender:</b> $gender</div>";
        }

        echo "</div></div>";
    }
} else {
    echo "<div class='container'><h1>No data submitted yet</h1></div>";
}
?>

</body>
</html>
