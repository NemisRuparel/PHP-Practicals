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
            margin-top: -350px;
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
<h1>1. Parent Class (ParentClass)</h1>
<h3>Method: displayMessage()</h3>
<p>A public method that prints "This is a method from the Parent Class". <br>
This method can be accessed by the child class due to inheritance.
<br></p>
<h1>2. Child Class (ChildClass)</h1>
<h3>Inheritance</h3>
ChildClass extends ParentClass, meaning it inherits its methods.<br>
<h3>Method: invokeParentMethod()</h3>
Prints "Calling Parent Class Method Using Child Class". <br>
Calls the parent class method using $this->displayMessage();<br><br>
<h1>3. Object Creation and Method Invocation</h1>
An object $childInstance of class ChildClass is created. <br>
The method $childInstance->invokeParentMethod(); is called: <br>
It first prints "Calling Parent Class Method Using Child Class". <br>
Then, it invokes displayMessage() from ParentClass, which prints "This is a method from the Parent Class".
</div>
<?php 
     class ParentClass {
        public function displayMessage() {
            echo "<h2>This is a method from the Parent Class</h2>";
        }
    }

    class ChildClass extends ParentClass {
        public function invokeParentMethod() {
            echo "<div class='half1'>";
            echo "<h2>Calling Parent Class Method Using Child Class:</h2><hr>";
            $this->displayMessage();
            echo "</div>";
        }
    }

    $childInstance = new ChildClass();
    $childInstance->invokeParentMethod();

?>

</body>
</html>