<?php
session_start();

// Check if username exists in session
if (!isset($_SESSION['uname'])) {
    header("Location: login.php");
    exit();
}

$uname = $_SESSION['uname'];
echo "<h1>Welcome Back, " . $uname . "...!</h1>";


if (isset($_POST['logout'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 20%;
            font-family: Arial, Helvetica, sans-serif;
        }
        button {
            font-weight: 900;
            width: 10%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            border: 1px solid #000;
            border-radius: 10px;
            transition: .5s;
            box-shadow: 0px 0px 10px #000;
            margin-left: 44%;
        }
        button:hover {
            border: 1px solid #555;
            background-color: #555;
            color: #eee;
            box-shadow: 0px 0px 10px #000;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <button type="submit" name="logout">LogOut</button>
    </form>
</body>
</html>