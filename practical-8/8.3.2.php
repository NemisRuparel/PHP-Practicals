<!DOCTYPE html>
<html>
<head>
    <title>Confirm Booking</title>
    <style>
        body{
            background-color: beige;
        }
        .display{
            
            margin-top: 50px;

        }
        .main{
            text-align: center;
            width: 450px;
            border: 1px solid white;
            background-color: white;
            border-radius: 10px;
            margin-top: 300px;
            margin-left: 650px;
            box-shadow: 0px 0px 10px black;
        }
    </style>
</head>
<body>
    
        <div class="main">
            <h2 align="center">Booking Confirmation</h2>
            
            <?php
    if(isset($_GET['movie']) && isset($_GET['time']) && isset($_GET['theater'])) {
        $movie = $_GET['movie'];
        $time = $_GET['time'];
        $theater = $_GET['theater'];
        
        echo "<div class='display'>";
        echo "<p><b>Movie:</b> $movie</p>";
        echo "<p><b>Showtime:</b> $time</p>";
        echo "<p><b>Theater:</b> $theater</p>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "<p>Invalid booking details.</p>";
    }
    ?>
</body>
</html>
