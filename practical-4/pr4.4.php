<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        form {
            border: 1px solid black;
            text-align: center;
            padding: 10px;
            background-color: cadetblue;
            width: 300px;
            margin-left: 550px;

        }
        button {
            background-color: black;
            border-radius: 5px;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: grey;
        }
        .table-container {
            margin: 20px auto;
            width: fit-content;
            text-align: center;
            
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter the number to print multiplication table:</label><br>
        <input type="number" name="value" id="number"style="margin-top:10px" required>
        <button type="submit">Submit</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $x = $_POST['value'];

            echo "<div class='table-container'>";
            echo "<h3>Multiplication Table for $x:</h3>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $x * $i;
                echo "<p>$x * $i = $result</p>";
            }
            echo "</div>";
        }
    ?>
</body>
</html>
