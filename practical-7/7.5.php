<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Overriding</title>
    <style>
        * {
            color: black;
        }

        body {
            background-color: aquamarine;
        }

        h2 {
            text-align: center;
        }

        hr {
            width: 50%;
            border: 1px solid black;
            background-color: black;
        }

        .half1 {
            width: 48%;
            border: 1px solid white;
            margin-left: 51%;
            border-radius: 10px;
            margin-top: -350px;
            background-color: white;
        }

        .container {
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
        <h3>Method: showMessage()</h3>
        <p>Defined in ParentClass, prints "This is a method from Parent Class". <br></p>

        <h1>2. Child Class (ChildClass)</h1>
        <h3>Method Overriding</h3>
        The showMessage() method is redefined in ChildClass, which prints "This is an overridden method from Child Class". <br>

        <h1>3. Object Creation and Method Invocation</h1>
        - An object $parentObj of ParentClass calls $parentObj->showMessage();, which prints "This is a method from Parent Class". <br>
        - An object $childObj of ChildClass calls $childObj->showMessage();, which prints "This is an overridden method from Child Class".<br>
    </div>

    <?php
    class ParentClass {
        public function showMessage() {
            echo "<h2>This is a method from Parent Class</h2>";
        }
    }

    class ChildClass extends ParentClass {
        public function showMessage() {
            echo "<h2>This is an overridden method from Child Class</h2>";
        }
    }

    echo "<div class='half1'>";
    echo "<h2>Method Overriding Output</h2><hr>";

    $parentObj = new ParentClass();
    echo "<h4>Calling Parent Class Method:</h4>";
    $parentObj->showMessage();

    $childObj = new ChildClass();
    echo "<h4>Calling Overridden Method in Child Class:</h4>";
    $childObj->showMessage();

    echo "</div>";
    ?>

</body>
</html>
