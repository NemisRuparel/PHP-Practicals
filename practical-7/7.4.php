<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>1. Grandparent Interface</h1>
        <h3>Method: showGrandparent()</h3>
        <p>Defined in GrandparentInterface, prints "This is a method from Grandparent". <br></p>

        <h1>2. Parent Interface</h1>
        <h3>Method: showParent()</h3>
        Prints "This is a method from Parent".<br>

        <h1>3. Child Class (Implements Both Interfaces)</h1>
        <h3>Implementation</h3>
        ChildClass implements both GrandparentInterface and ParentInterface.<br>

        <h3>Method: showAll()</h3>
        Prints "Calling Methods from Grandparent and Parent" and then calls showGrandparent() and showParent().<br>

        <h1>4. Object Creation and Method Invocation</h1>
        An object $child of class ChildClass is created.<br>
        The method $child->showAll(); is called.<br>
        - First prints "Calling Methods from Grandparent and Parent".<br>
        - Then invokes showGrandparent() (prints "This is a method from Grandparent").<br>
        - Finally invokes showParent() (prints "This is a method from Parent").<br>
    </div>

    <?php
    interface GrandparentInterface {
        public function showGrandparent();
    }

    interface ParentInterface {
        public function showParent();
    }

    class ChildClass implements GrandparentInterface, ParentInterface {
        public function showGrandparent() {
            echo "<h2>This is a method from Grandparent</h2>";
        }

        public function showParent() {
            echo "<h2>This is a method from Parent</h2>";
        }

        public function showAll() {
            echo "<div class='half1'>";
            echo "<h2>Calling Methods from Grandparent and Parent:</h2><hr>";
            $this->showGrandparent();
            $this->showParent();
            echo "</div>";
        }
    }

    $child = new ChildClass();
    $child->showAll();
    ?>

</body>
</html>
