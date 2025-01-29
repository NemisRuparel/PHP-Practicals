<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 20px;
        }
        h2, h3 {
            text-align: center;
        }
        table {
            width: 60%;
            margin: 0 auto;
            border-collapse: collapse;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .status {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .pass {
            color: green;
        }
        .fail {
            color: red;
        }
        form {
            width: 60%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $marks = [$_POST['subject1'], $_POST['subject2'], $_POST['subject3'], $_POST['subject4']];
    $grades = [];
    $status = "PASS";

    foreach ($marks as $mark) {
        if ($mark < 35) {
            $grades[] = "FF";
            $status = "FAIL";
        } elseif ($mark >= 85) {
            $grades[] = "AA";
        } elseif ($mark >= 75) {
            $grades[] = "AB";
        } elseif ($mark >= 65) {
            $grades[] = "BB";
        } elseif ($mark >= 55) {
            $grades[] = "BC";
        } elseif ($mark >= 45) {
            $grades[] = "CC";
        } elseif ($mark >= 40) {
            $grades[] = "CD";
        } elseif ($mark >= 35) {
            $grades[] = "DD";
        }
    }

    echo "<h2>Result</h2>";
    echo "<table>";
    echo "<tr><th>Subject</th><th>Marks</th><th>Grade</th></tr>";
    foreach ($marks as $i => $mark) {
        echo "<tr><td>Subject " . ($i + 1) . "</td><td>$mark</td><td>{$grades[$i]}</td></tr>";
    }
    $statusClass = $status == "PASS" ? "pass" : "fail";
    echo "</table>";
    echo "<h3 class='status $statusClass'>Status: $status</h3>";
}
?>

<form method="POST">
    <label for="subject1">Subject 1 Marks:</label>
    <input type="number" id="subject1" name="subject1" min="0" max="100" required>
    <label for="subject2">Subject 2 Marks:</label>
    <input type="number" id="subject2" name="subject2" min="0" max="100" required>
    <label for="subject3">Subject 3 Marks:</label>
    <input type="number" id="subject3" name="subject3" min="0" max="100" required>
    <label for="subject4">Subject 4 Marks:</label>
    <input type="number" id="subject4" name="subject4" min="0" max="100" required>
    <button type="submit">Calculate Result</button>
</form>

</body>
</html>