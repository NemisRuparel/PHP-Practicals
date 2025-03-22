<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["user_id"] = $_POST["user_id"];
}

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST["logout"])) {
    // session_unset();
    session_destroy();
    header("Location: login.php");
    // exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 600px;
            margin: 0;
        }
        .container {
            background: #ffffff;
            padding: 32px 48px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
        }
        h2 {
            color: #333333;
            margin-bottom: 24px;
        }
        p {
            color: #333333;
            margin: 16px 0;
            font-size: 18px;
        }
        button {
            width: 160px;
            height: 48px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Dashboard</h2>
        <p>Welcome, User ID: <?php echo $_SESSION["user_id"]; ?></p>
        <p>Session successfully maintained!</p>
        <form method="POST">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
</body>
</html>