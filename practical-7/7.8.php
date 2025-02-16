<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface in PHP</title>
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
        <h1>1. Interface (Animal)</h1>
        <h3>Method: makeSound()</h3>
        <p>Defined inside an interface. Any class that implements this interface must define makeSound().<br></p>

        <h1>2. Implementing Classes</h1>
        Dog Class : Implements makeSound(), returns "Dog barks".<br>
        Cat Class : Implements makeSound(), returns "Cat meows".<br>

        <h1>3. Object Creation and Method Invocation</h1>
        - An object $dog calls $dog->makeSound(); -> prints "Dog barks".<br>
        - An object $cat calls $cat->makeSound(); -> prints "Cat meows".<br>
    </div>

    <?php
    interface Animal {
        public function makeSound();
    }

    class Dog implements Animal {
        public function makeSound() {
            return "Dog barks";
        }
    }

    class Cat implements Animal {
        public function makeSound() {
            return "Cat meows";
        }
    }

    echo "<div class='half1'>";
    echo "<h2>Interface Implementation Output</h2><hr>";

    $dog = new Dog();
    echo "<h4>Dog: " . $dog->makeSound() . "</h4>";

    $cat = new Cat();
    echo "<h4>Cat: " . $cat->makeSound() . "</h4>";

    echo "</div>";
    ?>

</body>
</html>
