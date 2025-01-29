<html>
    <title>Display Information</title>
    <style>
        #display-info{
        background-color: cadetblue;
        color: black;
        padding: 3%;
        border-radius: 30px;
        font-size: x-large;
    }
    #display-info{
        text-align: center;
    }
    </style>
<?php
    $student_first_name = $_POST['sfirstname'];
    $student_last_name = $_POST['slastname'];
    $student_birth_date = $_POST['sbdate'];
    $student_age = $_POST['sage'];
    $student_address = $_POST['saddress'];
$student_info = "
    <div id='display-info'>
    <h2>Student Information</h2>
    <p>Student First Name Is : $student_first_name</p>
    <p>Student Last Name Is : $student_last_name</p>
    <p>Student  Birth Date Is : $student_birth_date</p>
    <p>Student Age Is :  $student_age</p>
    <p>Student Address Is : $student_address</p>
    </div>
    ";
echo $student_info;
?>
</html>