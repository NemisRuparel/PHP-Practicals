<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smallest Note Converter</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            margin-top: 125px;
            background-color: aquamarine;
            font-family: Arial, sans-serif;
        }

        form input,
        form button {
            display: block;
            width: 50%;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.200), 0 6px 20px 0 rgba(0, 0, 0, 0.200);
        }

        .btn {
            display: flex;
        }

        #btn1 {
            margin-left: 560px;
        }

        #btn2 {
            margin-left: -535px;
        }

        form input {
            background-color: aliceblue;
            height: 50px;
            width: 625px;
        }

        form button {

            width: 300px;
            height: 50px;
            transition: all .3s;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;

        }

        form button:hover {
            background-color: black;
            color: white;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 60px;
        }

        #result {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            font-weight: bold;
            color: black;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        p {
            padding-top: 10px;
            font-size: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>
        <b>Smallest Note Calculator</b>
    </h1>
    <form action="6.2.php" method="POST">
        <input type="number" name="ipamount" placeholder="Enter Amount">
        <div class="btn">
            <button id="btn1" type="submit" name="calculate">Calculate</button>
            <button id="btn2" name="clr">Clear</button>
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["calculate"]) && empty($_POST["ipamount"])) {
            echo "<p>Please enter amount</p>";
        }
        if (isset($_POST["calculate"]) && !empty($_POST["ipamount"])) {
            $input = $_POST["ipamount"];
            function calculatenotes($inp)
            {
                $denomination = [100, 50, 20, 10, 5, 2, 1];
                $noteAmount = 0;

                if ($inp <= 0 or $inp == 0) {
                    echo "<p>Please enter positive amount</p>";
                    return;
                }
                echo "<h1 style='margin-top:70px'>Result</h1>";
                echo "<p><b>Minimum notes required for amount : </b>" . $inp . "</p>";
                foreach ($denomination as $value) {
                    $count = intdiv($inp, $value);
                    $noteCount[$value] = $count;
                    $inp %= $value;
                }
                foreach ($noteCount as $note => $count) {
                    if ($count == 0) {
                        continue;
                    }
                    if ($count == 1) {
                        echo "<p><b>Rs." . $note . " : </b>" . $count . " note<br></p>";
                        continue;
                    }
                    echo "<p><b>Rs." . $note . " : </b>" . $count . " notes<br></p>";
                }

                $totalNotes = array_sum($noteCount);
                echo "<p><b>Minimum notes required: </b>" . $totalNotes . "</p>";
            }
            calculatenotes($input);
        }
    }
    ?>
</body>

</html>