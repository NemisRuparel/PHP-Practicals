<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
<h1>1. Parent Class (ParentClass)</h1>
<h3>Method: displayMessage()</h3>
<p>Prints "Parent Class:". <br>
This method will be overridden in the child class.
<br></p>
<h1>2. Child Class (ChildClass)</h1>
<h3>Inheritance</h3>
ChildClass extends ParentClass, meaning it inherits its methods.<br>
<h3>Overridden Method: displayMessage()</h3>
Calls the parent class method using parent::displayMessage();. <br>
Prints "Overridden Method Called Using Child Class:".<br><br>
<h1>3. Object Creation and Method Execution</h1>
A ChildClass object $childInstance is created. <br>
Calling $childInstance->displayMessage(); does the following: <br>
<b>
1. Executes parent::displayMessage();, which prints "Parent Class:". <br>
2. Then prints "Overridden Method Called Using Child Class:". <br>
</b>
</div>
    <?php
    class ParentClass {
        public function displayMessage() {
            echo "<div class='half1'>";
            echo "<h2>Parent Class:</h2><hr>";
        }
    }

    class ChildClass extends ParentClass {
        public function displayMessage() {
            parent::displayMessage();
            echo "<h2>Overridden Method Called Using Child Class:</h2>";
            echo "</div>";
        }
    }

    $childInstance = new ChildClass();
    $childInstance->displayMessage();
    ?>
</body>
</html> 