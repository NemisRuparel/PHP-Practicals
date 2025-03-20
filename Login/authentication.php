<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['btn'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $_SESSION['uname'] = $uname; 

    $result = mysqli_query($conn,"SELECT * FROM user WHERE email = '$uname' AND password = '$pass'");

    if (mysqli_num_rows($result) > 0) {
        header("Location: home.php");

    } else {
        header("Location: login.php");
    }
}

mysqli_close($conn);
?>
