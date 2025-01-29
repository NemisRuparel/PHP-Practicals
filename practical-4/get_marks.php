<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Of Student</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            /* background: linear-gradient(135deg, #6a11cb, #2575fc); */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            background-color: #ffffff;
            width: 90%;
            max-width: 600px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        form h2 {
            text-align: center;
            color: #444;
            font-size: 24px;
            margin-bottom: 20px;
        }

        form input {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 15px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: 0.3s ease;
        }

        form input:focus {
            border-color:rgb(55, 53, 58);
            box-shadow: 0 0 5px rgba(55, 53, 58, 0.4);
        }

        .inputs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .inputs > div {
            display: flex;
            flex-direction: column;
        }

        form button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            background:rgb(58, 58, 59);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease;
            font-weight: bold;
        }

        form button:hover {
            background: #2575fc;
        }
    </style>
</head>

<body>
    <form action="display_marks.php" method="post">
        <h2>Student Marks Calculator</h2>
        <input type="text" placeholder="Enter your name" name="student-name">
        <input type="number" placeholder="Enter your enrollment number" name="enrollment">
        <input type="number" placeholder="Enter your current semester" name="sem">
        <input type="text" placeholder="Enter your branch" name="branch">
        <div class="inputs">
            <div id="input-one">
                <input type="text" placeholder="Enter first subject's name" name="subject-one-name">
                <input type="number" placeholder="Enter first subject's marks" name="subject-one-marks">
            </div>
            <div id="input-two">
                <input type="text" placeholder="Enter second subject's name" name="subject-two-name">
                <input type="number" placeholder="Enter second subject's marks" name="subject-two-marks">
            </div>
            <div id="input-three">
                <input type="text" placeholder="Enter third subject's name" name="subject-three-name">
                <input type="number" placeholder="Enter third subject's marks" name="subject-three-marks">
            </div>
            <div id="input-four">
                <input type="text" placeholder="Enter fourth subject's name" name="subject-four-name">
                <input type="number" placeholder="Enter fourth subject's marks" name="subject-four-marks">
            </div>
        </div>
        <button name="calculate" type="submit">Calculate</button>
    </form>
</body>

</html>
