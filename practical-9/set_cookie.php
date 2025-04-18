<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST["user_id"];
    setcookie("user_id", $user_id, time() + 3600, "/","",0);
    header("Location: view_cookie.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Set Cookie</title>
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
        }
        h2 {
            color: #333333;
            text-align: center;
            margin-bottom: 24px;
        }
        label {
            display: block;
            color: #333333;
            margin-bottom: 8px;
        }
        input[type="text"] {
            width: 304px;
            height: 40px;
            padding: 12px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 160px;
            height: 48px;
            margin-top: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Set User Cookie</h2>
        <form method="POST" action="">
            <label>User ID:</label>
            <input type="text" name="user_id" required>
            <input type="submit" value="Set Cookie">
        </form>
    </div>
</body>
</html>