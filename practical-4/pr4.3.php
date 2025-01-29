<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
    <style>
        .output{
            text-align: center;
            border: 2px solid black;
            padding:20px;
            border-radius: 10px; 
            margin-top: 10px;

        }
        .container{
            border: 2px solid black;
            padding:20px;
            border-radius: 10px; 
            
        }
    </style>
</head>
<body>
    
    <center>
    <div class="container">
    <h2>Fibonacci Series Generator</h2>
    <form action="pr4.3.php" method="post">
        <label for="terms">Enter Number of Terms:</label>
        <input type="number" id="terms" name="val" min="1" required>
        <button type="submit"name="generate">Generate</button>
    </form>
    </div>
    </center>
    <?php
    if (isset($_POST["generate"])) {
    
        echo '<div class="output">';
        
        $terms = $_POST['val'];
        $number1 = 0;
        $number2 = 1;

        echo "<h3>Fibonacci Series:</h3>";
        for ($i = 1; $i <= $terms; $i++) {
            echo $number1 . " ";
            $nt = $number1 + $number2;
            $number1 = $number2;
            $number2 = $nt;
        }
    
        echo '</div>';
    }
    ?>
    
</body>
</html>