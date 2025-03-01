<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Functions</title>
    <style>
         * {
            margin: 0;   
            padding: 0;
            box-sizing: border-box;
        }
        body {
            margin-top: 125px;
            background-color: aquamarine;
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
        .btn{
            display: flex;
        }
        #btn1{
            margin-left: 750px;
        }
        #btn2{
            margin-left: -730px;
        }
        form input {
            background-color: aliceblue;
            height: 50px;
            width: 625px;
        }
        form button {
         
            width: 300px;
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
            font-size: 60px;
        }
        #result {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            color: black;
        }
        .button-container {
            display: flex;
            justify-content: center;
        }
        p{
            padding-top: 10px;
            font-size: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>
        <b>Math Functions</b>
    </h1>
    <form action="6.3.php"method="POST">
        <input type="number"name="ipnumber"placeholder="Ente Number">
        <input type="number" name="min_range" id="" placeholder="Enter Minimum Range">
        <input type="number" name="max_range" id="" placeholder="Enter Maximum Range">
        <input type="number"name="angle" placeholder="Enter Angle">
        <div class="btn">
            <button id="btn1"type="submit"name="calculate">Calculate</button>
            <button id="btn2"name="clr">Clear</button>
        </div>
    </form>
    <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (isset($_POST["calculate"]) && empty($_POST["ipnumber"])) {
        echo "<p>Please enter number</p>";
    }
    if (isset($_POST["calculate"]) && empty($_POST["min_range"])) {
        echo "<p>Please enter minimum range</p>";
    }
    if (isset($_POST["calculate"]) && empty($_POST["max_range"])) {
        echo "<p>Please enter maximum range</p>";
    }
    if (isset($_POST["calculate"]) && empty($_POST["angle"])) {
        echo "<p>Please enter angle</p>";
    }

    if (isset($_POST["calculate"]) && !empty($_POST["ipnumber"]) && !empty($_POST["min_range"]) && !empty($_POST["max_range"]) && !empty($_POST["angle"])) {
        $angle = (float)$_POST["angle"];
        $radians = deg2rad($angle);
        $sine = sin($radians);
        $cos = cos($radians);
        $tan = tan($radians);
        echo"<h1>Result</h1>";
        echo "<p><b>Random number between " . $_POST["min_range"] . " and " . $_POST["max_range"] . " is : </b>" . rand($_POST["min_range"], $_POST["max_range"]) . "</p><br>";
        echo "<p><b>" . $_POST["ipnumber"] . " to binary is : </b>" . decbin($_POST["ipnumber"]) . "</p><br>";
        echo "<p><b>" . $_POST["ipnumber"] . " to octal is : </b>" . decoct($_POST["ipnumber"]) . "</p>";
        echo "<p><b>" . $_POST["ipnumber"] . " to hexadecimal is : </b>" . dechex($_POST["ipnumber"]) . "</p><br>";
        echo "<p><b> (". $_POST["angle"].") Sine of the Angle:</b> " . $sine . "</p>";
        echo "<p><b> (". $_POST["angle"].") Cos of the Angle:</b> " . $cos . "</p>";
        echo "<p><b> (". $_POST["angle"].") Tan of the Angle:</b> " . $tan . "</p>";

    }
}
?>

</body>
</html>