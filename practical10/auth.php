<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="practical10";

    $name = $_POST['name'];
    $currcomp = $_POST['currcomp'];
    $pastcomp = $_POST['pastcomp'];
    $exp = $_POST['exp'];
    $email = $_POST['email'];
    $mono = $_POST['mono'];
    $gender = $_POST['gender'];
    $paswd = $_POST['password'];

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    $sql = "INSERT INTO employee (name, currcomp, pastcomp, exp, email, mono, gender, password) 
        VALUES ('$name', '$currcomp', '$pastcomp', $exp, '$email', $mono, '$gender', '$paswd')";
    $result=mysqli_query($conn,$sql);
        if ($conn) {
        echo"Hello";
    }

?>