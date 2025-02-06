<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        body{
            background-color: aquamarine;
            color: black;
        }
        h1{
            margin-top: 10%;
            font-size: 40px;
            font-weight: bold;
        }
        h2{
            font-size: 35px;
            text-align: center;
            font-weight: 100;
        }
        p{
            font-size: 20px;
            text-align: center;
            border: 1px solid black;
            border-radius: 10px;
            background-color: black;
            color: aquamarine;
            width: 30%;
            padding-top: 25px;
            height: 50px;
            margin-left: 35%;
        } 
    </style>
</head>
<body>
    <h1 align="center">Time & Date in different formats</h1>
    <?php

date_default_timezone_set('Asia/Kolkata');

$currentDateTime = date('Y-m-d H:i:s');

echo "<h2>Current Date and Time in Different Formats : <h2><br>";

echo "<p><strong>1. YYYY-MM-DD HH:MM:SS - </strong>" . date('Y-m-d H:i:s') . "</p>";
echo "<p><strong>2. DD-MM-YYYY HH:MM:SS - </strong>" . date('d-m-Y H:i:s') . "</p>";
echo "<p><strong>3. MM/DD/YYYY HH:MM AM/PM - </strong>" . date('m/d/Y h:i A') . "</p>";
echo "<p><strong>4. Day, Month DD, YYYY - </strong>" . date('l, F d, Y') . "</p>";
?>

</body>
</html>