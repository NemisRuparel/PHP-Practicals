<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Overloading</title>
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
        <h1>1. Class (OverloadExample)</h1>
        <h3>Method: display()</h3>
        <p>The method display() works differently based on the number of arguments. <br></p>

        <h1>2. Method Overloading</h1>
        - If called without arguments, it prints "No parameters passed".<br>
        - If called with one argument, it prints "One parameter: value".<br>
        - If called with two arguments, it prints "Two parameters: value1, value2".<br>

        <h1>3. Object Creation and Method Invocation</h1>
        - An object $obj of OverloadExample is created.<br>
        - $obj->display(); prints "No parameters passed".<br>
        - $obj->display("Hello"); prints "One parameter: Hello".<br>
        - $obj->display("Hello", "World"); prints "Two parameters: Hello, World".<br>
    </div>

    <?php
    class OverloadExample {
        public function display() {
            $numArgs = func_num_args();
            $args = func_get_args();

            if ($numArgs == 0) {
                echo "<h2>No parameters passed</h2>";
            } elseif ($numArgs == 1) {
                echo "<h2>One parameter: " . $args[0] . "</h2>";
            } elseif ($numArgs == 2) {
                echo "<h2>Two parameters: " . $args[0] . ", " . $args[1] . "</h2>";
            } else {
                echo "<h2>Too many parameters</h2>";
            }
        }
    }

    echo "<div class='half1'>";
    echo "<h2>Method Overloading Output</h2><hr>";

    $obj = new OverloadExample();
    echo "<h4>Calling without arguments:</h4>";
    $obj->display();

    echo "<h4>Calling with one argument:</h4>";
    $obj->display("Hello");

    echo "<h4>Calling with two arguments:</h4>";
    $obj->display("Hello", "World");

    echo "</div>";
    ?>

</body>
</html>
