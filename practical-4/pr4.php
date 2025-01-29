<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 4</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f4f8;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px 30px;
            width: 400px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        .ip {
            margin-bottom: 20px;
        }
        label {
            font-size: 16px;
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border 0.3s ease;
        }
        input[type="text"]:focus {
            border: 1px solid #007bff;
        }
        .btn button {
            padding: 10px 20px;
            font-size: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        .btn button[name="Submit"] {
            background-color: #007bff;
            color: #fff;
        }
        .btn button[name="clr"] {
            background-color: #ff4b5c;
            color: #fff;
        }
        .btn button:hover {
            opacity: 0.9;
        }
        p {
            font-size: 16px;
            color: #007bff;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Car Company Display</h1>
        <form method="POST" action="">
            <div class="ip">
                <label for="car_name">Enter Car Name:</label>
                <input type="text" id="car_name" name="car_name">
            </div>
            <div class="btn">
                <button type="submit" name="Submit">Display</button>
                <button name="clr" type="submit">Clear Result</button>
            </div>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $result = null;
                $cn = $_POST["car_name"];

                if ($cn == "Safari" || $cn == "Nexon" || $cn == "Tigor" || $cn == "Tiago") {
                    $result = "Tata";
                } else if ($cn == "XUV700" || $cn == "XUV300" || $cn == "Bolero") {
                    $result = "Mahindra";
                } else if ($cn == "i20" || $cn == "Verna" || $cn == "Venue" || $cn == "Creta") {
                    $result = "Hyundai";
                } else if ($cn == "Swift" || $cn == "Alto" || $cn == "Baleno" || $cn == "Brezza") {
                    $result = "Maruti Suzuki";
                }
                if (isset($_POST['clr'])) {
                    $result = "";
                }
                if (!empty($result)) {
                    echo "<p>Car Manufacturer: $result</p>";
                }
            }
        ?>
    </div>
</body>
</html>
