<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Cloning in PHP</title>
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
        <h1>1. Class Definition (Person)</h1>
        <h3>Properties: $name, $age</h3>
        <p>Holds details of a person such as `name` and `age`.<br></p>

        <h3>Method: __clone()</h3>
        Defines custom behavior during cloning.<br>

        <h1>2. Object Creation and Cloning</h1>
        - `$person1` is created and assigned `"Nemis"`, `17`.<br>
        - `$person2 = clone $person1;` creates a new object with the same properties.<br>

        <h1>3. Changing Cloned Object Property</h1>
        - `$person2->name = "Ravi";` modifies the cloned object's `name` without affecting `$person1`.<br>
    </div>

    <?php
    class Person {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function __clone() {
            $this->name = "Cloned - " . $this->name; 
            $this->age += 1; 
        }
        
    }

    $person1 = new Person("ABC", 17);
    $person2 = clone $person1; 
    $person2->name = "XYZ"; 

    echo "<div class='half1'>";
    echo "<h2>Object Cloning Output</h2><hr>";

    echo "<h4>Original Person: Name = " . $person1->name . ", Age = " . $person1->age . "</h4>";
    echo "<h4>Cloned Person: Name = " . $person2->name . ", Age = " . $person2->age . "</h4>";

    echo "</div>";
    ?>

</body>
</html>
