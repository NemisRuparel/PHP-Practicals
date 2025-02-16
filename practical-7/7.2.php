<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <style>
        * {
            color: black;
        }

        body {
            background-color: aquamarine;
        }

        h2,
        h4 {
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
        <h3>Private Properties: $name, $age</h3>
        <p>Declared as private, meaning they cannot be accessed directly outside the class. <br></p>
        
        <h3>Setter Method: __set($property, $value)</h3>
        Takes two parameters: <br>
        - `$property` (the property name) <br>
        - `$value` (the value to assign) <br>
        Assigns the value only if the property exists inside the class. <br>

        <h3>Getter Method: __get($property)</h3>
        Returns the value of the private property only if it exists inside the class. <br>

        <h1>2. Object Creation and Property Assignment</h1>
        Creates an instance: <br>
        <strong>$p1 = new Person();</strong> <br>
        Sets the properties dynamically: <br>
        <strong>$p1->name = "Nemis";</strong> <br>
        <strong>$p1->age = 17;</strong> <br>
    </div>

    <?php
    class Person
    {
        private $name;
        private $age;

        public function __set($property, $value)
        {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }
        }

        public function __get($property)
        {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
            return null;
        }
    }

    $p1 = new Person();
    $p1->name = "Nemis";
    $p1->age = 17;

    echo "<div class='half1'>";
    echo "<h2>Person Details</h2><hr>";
    echo "<h4>Name: " . $p1->name . "</h4>";
    echo "<h4>Age: " . $p1->age . "</h4>";
    echo "</div>";
    ?>

</body>

</html>
