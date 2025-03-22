<?php
$user_id = isset($_COOKIE["user_id"]) ? $_COOKIE["user_id"] : "Not set";

if (isset($_POST["clear"])) {
    setcookie("user_id", "", time() - 3600, "/"); // Expire cookie
    header("Location: set_cookie.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Cookie</title>
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
        <h2>Cookie Dashboard</h2>
        <p>User ID from Cookie: <?php echo $user_id ?></p>
        <p>Cookie successfully retrieved!</p>
        <form method="POST">
            <button type="submit" name="clear">Clear Cookie</button>
        </form>
    </div>
</body>
</html>