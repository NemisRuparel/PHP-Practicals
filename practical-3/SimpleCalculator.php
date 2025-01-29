<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        * {
            margin: 0;   
            padding: 0;
            box-sizing: border-box;
        }
        body {
            margin-top: 125px;
            background-color: cadetblue;
            font-family: Arial, sans-serif;
        }
        form input, form button {
            display: block;
            width: 50%;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.200), 0 6px 20px 0 rgba(0, 0, 0, 0.200);
        }
        form input {
            background-color: aliceblue;
        }
        form button {
            height: 50px;
            transition: all .3s;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
        }
        form button:hover {
            background-color: black;
            color: white;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        #result {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post">
        <input type="number" name="fn" placeholder="Enter First Number">
        <input type="number" name="sn" placeholder="Enter Second Number">
        <button name="add" type="submit">+</button>
        <button name="sub" type="submit">-</button>
        <button name="mult" type="submit">*</button>
        <button name="div" type="submit">/</button>
        <button name="mod" type="submit">%</button>
        <button name="exp" type="submit">**</button>
        <button name="clr" type="submit">Clear Result</button>
    </form>

    <?php
    $result = "";

    $a = (float) ($_POST['fn'] ?? 0);
    $b = (float) ($_POST['sn'] ?? 0);

    if (isset($_POST['add'])) {
        $result = $a + $b;
    } elseif (isset($_POST['sub'])) {
        $result = $a - $b;
    } elseif (isset($_POST['mult'])) {
        $result = $a * $b;
    } elseif (isset($_POST['div'])) {
        if ($b != 0) {
            $result = $a / $b;
        } else {
            $result = "Error: Division by zero!";
        }
    } elseif (isset($_POST['mod'])) {
        if ($b != 0) {
            $result = $a % $b;
        } else {
            $result = "Error: Division by zero!";
        }
    } elseif (isset($_POST['exp'])) {
        if ($b == 0) {
            $result = 1;
        } else {
            $result = $a ** $b;
        }
    } elseif (isset($_POST['clr'])) {
        $result = "";
    }
    if ($result !== "") {
        echo "<div id='result'>Result: $result</div>";
    }
    ?>
</body>
</html>
