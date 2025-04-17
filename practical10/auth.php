<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical10";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Sorry ..! There was some problem occured <br> Please try again later ...!";
}

if (isset($_POST['submitbtn'])) {
    $name = $_POST['name'];
    $currcomp = $_POST['currcomp'];
    $pastcomp = $_POST['pastcomp'];
    $exp = $_POST['exp'];
    $email = $_POST['email'];
    $mono = $_POST['mono'];
    $gender = $_POST['gender'];
    $paswd = $_POST['password'];

    $sql = "INSERT INTO employee (name, currcomp, pastcomp, exp, email, mobileno, gender, password, profile_photo) 
            VALUES ('$name', '$currcomp', '$pastcomp', $exp, '$email', $mono, '$gender', '$paswd', '')";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        $_SESSION['email'] = $email;
        header("location: home.php");
        exit();
    } else {
        echo "Error occurred during registration";
    }
}

if (isset($_POST['loginbtn'])) {
    $email = $_POST['email'];
    $paswd = $_POST['password'];

    $sql = "SELECT * FROM employee WHERE email='$email' && password='$paswd'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header("location: home.php");
        exit();
    } else {
        echo "<script>window.alert('not logged in,
                                    Please SignIn..!')</script>";
        header("location:signin.php");
    }
}

mysqli_close($conn);
?>