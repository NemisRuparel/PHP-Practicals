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
            /* height: 2px; */
            border: 1px solid black;
            background-color: black;

        }

        .half1 {
            width: 48%;
            border: 1px solid white;
            margin-left: 51%;
            border-radius: 10px;
            margin-top: -300px;
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
        <h3>Private Property: $name</h3>
        <p>Declared as private, meaning it cannot be accessed directly outside the class <br></p>
        <h3>Setter Method: setName($name)</h3>
        Takes a parameter $name and assigns it to the private property $name using $this->name = $name;.<br>
        <h3>Getter Method: getName()</h3>
        Returns the value of the private property $name.
        <br><br>
        <h1>2. Object Creation and Method Execution</h1>
        Creates an instance:<br>
        <strong>$person = new Person();</strong>
        Sets The name<br>
        <strong>$person->setName("John");
x        </strong>
    </div>
    <?php
    class Person
    {
        private $name;

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }
    }
    echo "<div class='half1'>";
    echo "<h2>Person Details</h2><hr>";
    $person = new Person();
    $person->setName("John");
    echo "<h4>Name: " . $person->getName() . "</h4>";
    echo "</div>";
    ?>
</body>

</html>