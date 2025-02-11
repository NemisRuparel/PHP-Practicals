<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            color: black;
        }
        body{
            background-color: aquamarine;
        }
        h2{
            text-align: center;
        }
        hr{
            width: 50%;
            /* height: 2px; */
            border: 1px solid black;
            background-color: black;

        }
        .half1{
            width: 48%;
            border: 1px solid white;
            margin-left: 51%;
            border-radius: 10px;
            margin-top: -300px;
            background-color: white;
        }
        .container{
            width: 48%;
            border: 1px solid white;
            color: black;
            background-color: white;
            border-radius: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            margin-left: 1%;
            
        }
    
    </style>
</head>
<body>
    
<div class="container">
<h1>1. Class Definition (Base)</h1>
<h3>Constructor (__construct())</h3>
<p>Automatically called when an object of the class is created. <br>
Prints "This is Constructor of class Base". <br></p>
<h3>Public Method (Basemethod())</h3>
A regular method that prints "Public method of class Base" when called. <br>
<h3>Destructor (__destruct()) </h3>

Automatically called when the script execution ends or the object is destroyed. <br>
Prints "This is destructor of class Base". <br><br>
<h1>2. Object Creation and Method Invocation</h1>
An object $p1 of class Base is created, triggering the constructor.<br>
The Basemethod() is called using $p1->Basemethod();  , displaying its message. <br>
<strong>Once the script execution finishes, the destructor is automatically executed.</strong>
</div>
    <?php
         class Base{
           
                function __construct(){
                    echo "<div class='half1'><h2>This is Constructor of class Base<br><hr></h2>";
                }
                public function Basemethod(){
                    echo "<h2>Public method of class Base <br><hr></h2>";
                }
                function __destruct(){
                    echo "<h2>This is destructor of class Base</h2></div>";
                }
            }
            
        
        $p1 = new Base();
        $p1->Basemethod();
    ?>
</body>
</html>