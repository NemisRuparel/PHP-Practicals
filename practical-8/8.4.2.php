<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
    <style>
        a{
            text-decoration: none;
            color: white; 
             background-color: black;
             transition: all .3s;
             padding: 10px 0 10px 0;
             padding-left: 55px;
             padding-right: 45px;
             border: 2px solid white;
                border-radius: 10px;
        }
         a:hover{
            color: black;
            background-color: white;
            border: 1px solid white;
            border-radius: 10px;
        } 
        
        body{
            background-color: aquamarine;
        }
        .display{
            
            margin-top: 50px;
            margin-bottom: 10px;
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
            height: 270px;
        }
    </style>
</head>
<body>
    <div class="main">
    <h2>Order Confirmation</h2>
    <?php
    if(isset($_POST['food']) && (isset($_POST['quantity'])) && isset($_POST['restaurant'])) {
            $food = $_POST['food'];
            $quantity = $_POST['quantity'];
            $restaurant = $_POST['restaurant'];
        echo "<div class='display'>";
        echo "<p><b>Food Item:</b> $food</p>";
        echo "<p><b>Quantity:</b> $quantity</p>";
        echo "<p><b>Restaurant:</b> $restaurant</p>";
        echo "<p>Your order has been placed successfully!</p>";
        echo "<p><b>*Delivery mode is cash on delivery</b></p>";

    } else {
        echo "<p>Invalid order details.</p>";
        echo "<p style='padding-bottom:30px'>Go to main page again & fill up correct details</p>";
        echo "<a href='8.4.1.php'>Back</a>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</body>
</html>
