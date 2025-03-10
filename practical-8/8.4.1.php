<!DOCTYPE html>
<html>
<head>
    <title>Order Food</title>
</head>
    <style>
        *{
           margin: 0;
           padding: 0; 
            font-family: cursive;
        }

        h2{
            text-align: center;
            font-size: 26px;
            color: #000;
    text-shadow: 0px 0px 10px black;
            /* margin-top: 100px; */
        }
        body{
            background-color: beige;
        }
        .container{
            margin-top: 5%;
            margin-left:250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* justify-items: center; */
            
            
        }
        label{
            font-size: large;
            font-weight: 800;
        }
        .main{
            width: 800px;
            border: 1px solid white;
            border-radius: 10px;
            background-color: white;
            padding: 10px;
            margin-top: 290px;
            margin-left: 500px;
            box-shadow: 0px 0px 20px black;
        }
         form button {
            width: 150px;
            height: 50px;
            transition: all .3s;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            background-color: white;
            border: 1px solid white;
            border-radius: 10px;
            background-color: black;
            color: white;
            margin-left: 90px;
        }
        form button:hover {
            background-color: white;
            color: black;
            border: 1px solid white;
            border-radius: 10px;
        }
        </style>

<body>
<div class="main">

    <h2>Place Your Food Order</h2>
    <div class="container">

        <form action="8.4.2.php" method="post">
            <label for="food">Select Food Item:</label>
            <select id="food" name="food">
                <option value="Pizza">Pizza</option>
                <option value="Burger">Burger</option>
                <option value="Pasta">Pasta</option>
            </select>
            <br><br>
            <br>
            <label for="quantity">Select Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="1" max="10" required>
            
            <input type="hidden" name="restaurant" value="Domino's">
            <br><br><br>
            <button type="submit">Order Now</button>
        </form>
    </div>
</div>    
</body>
</html>
