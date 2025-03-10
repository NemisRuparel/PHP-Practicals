<html>
    <head>
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
        </style>
    </head>
    <body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $currcomp = $_POST['currcomp'];
    $pastcomp = $_POST['pastcomp'];
    $exp = $_POST['exp'];
    $salary = $_POST['salary'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $gender = $_POST['gender'];

    echo "
    
        <div class='container'>
            <h1>Here's Your Details</h1>
            
            <div class='details'>
                <div class='box'><b> Name:</b> $fname $lname</div>
                <div class='box'><b> Current Company:</b> $currcomp</div>
                <div class='box'><b> Past Company:</b> $pastcomp</div>
                <div class='box'><b> Experience:</b> $exp years</div>
                <div class='box'><b> Salary:</b> ₹$salary</div>
                <div class='box'><b> Email:</b> $email</div>
                <div class='box'><b> Phone No.:</b> +91$mobileno</div>
                <div class='box'><b> Gender:</b> $gender</div>
            </div>
        </div>
    
    ";
}
?>
</body>
</html>
