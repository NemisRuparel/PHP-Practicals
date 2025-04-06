<!DOCTYPE html>
<html>
<head>
    <title>Array to JSON and Back</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f2f2f2;
            padding: 30px;
        }
        h2 {
            color: #2c3e50;
        }
        .container {
            background-color: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            width: 600px;
            margin: auto;
        }
        pre {
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-size: 16px;
        }
        .section {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Associative Array to JSON and Back</h2>

        <?php
        $student = array(
            "name" => "Nemis Ruparel",
            "enrollment" => 236270307091,
            "city" => "Porbandar",
            "college" => "Government Polytechnic Porbandar"
        );

        $jsonString = json_encode($student, JSON_PRETTY_PRINT);
        $arrayBack = json_decode($jsonString, true);
        ?>

        <div class="section">
            <h3>Original Associative Array</h3>
            <pre><?php print_r($student); ?></pre>
        </div>

        <div class="section">
            <h3>JSON String</h3>
            <pre><?php echo $jsonString; ?></pre>
        </div>

        <div class="section">
            <h3>Converted Back to Associative Array</h3>
            <pre><?php print_r($arrayBack); ?></pre>
        </div>
    </div>
</body>
</html>
