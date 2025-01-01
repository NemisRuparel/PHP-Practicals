<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {

            margin: 0;
            padding: 0;
        }

        body {
            background-color: beige;
        }

        .container {
            height: 820px;
            width: 700px;
            background-color: #ddd;
            margin-left: 520px;
            margin-top: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
        }

        .h1class {
            background-color: #aaa;
            height: 90px;
            width: 100%;
            align-content: center;
            border-top: 1px solid #aaa;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border-left: 1px solid #aaa;
            border-right: 1px solid #aaa;
            border-bottom: none;
            margin-left: -1px;
            margin-top: -1px;
            margin-bottom: 20px;

        }

        label {
            margin-left: 40px;
            font-size: 20px;

        }

        .name input[type="text"] {
            margin-top: 5px;
            margin-left: 40px;
            width: 278px;
            height: 30px;
            border: 1px solid white;
            border-radius: 5px;
            outline: none;
        }

        input {
            margin-top: 5px;
            margin-left: 40px;
            width: 600px;
            height: 30px;
            border: 1px solid white;
            border-radius: 5px;
            outline: none;
        }

        input:focus {
            box-shadow: 0px 0px 10px beige;
            border: none;
        }

        .name {
            display: flex;
        }

        .gender {
            display: flex;
            width: 1000px;
            border-radius: 10px;
            margin-left: 40px;
            gap: 545px;

        }

        .gender .inner {
            height: 35px;
            width: 275px;
            display: flex;
            border: 1px solid #fff;
            background-color: #fff;
            border-radius: 5px;
            align-items: center;
        }

        .gender input {
            margin-top: -1px;
            margin-left: 50px;
            height: 20px;
            width: 20px;

        }

        .submitbtn {
            margin-left: 40px;
            margin-top: 15px;
            height: 40px;
            width: 230px;
            background-color: #0074FE;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: 1px solid #0074FE;
            border-radius: 5px;
            cursor: pointer;
        }

        .submitbtn:hover {
            transition: .5s;
            background-color: #0025FF;
        }
    </style>
</head>

<body>
    <form action="8.2.2.php" method="POST">

        <div class="container">
            <div class="h1class">
                <h1 align="center">Employee Information</h1>
            </div>

            <label for="name"><b>Your Name : </b></label> <br>
            <div class="name">
                <input type="text" name="fname" placeholder="&nbsp;&nbsp;&nbsp;First Name">
                <input type="text" name="lname" placeholder="&nbsp;&nbsp;&nbsp;Last Name">
            </div>

            <?php
            if (isset($_POST['submit'])) {

                if (empty($_POST['fname'])) {
                    echo "enter First name";
                }
            }
            ?>

            <br>

            <label for="currcomp"><b>Your Current Company : </b></label>
            <input type="text" name="currcomp">
*8

            <br><br>

            <label for="pastcomp"><b>Your Past Company (*): </b></label>
            <input type="text" name="pastcomp">

            <br><br>

            <label for="exp"><b>Your experience : </b></label>
            <input type="text" name="exp">

            <br><br>

            <label for="pastcomp"><b>Salary : </b></label>
            <input type="range" name="salary" min="10000" max="100000" value="50000" step="1000"
                oninput="this.nextElementSibling.value = this.value">
            <output>50000</output>

            <br><br>

            <label for="email"><b>Your Email : </b></label>
            <input type="text" name="email">

            <br><br>

            <label for="mobileno"><b>Phone No. (+91) : </b></label>
            <input type="text" name="mobileno">

            <br><br>
            <label for="gender"><b>Gender : </b></label> <br>
            <div class="gender">
                <div class="inner">
                    <label style="margin-left:50px">Male</label>
                    <input type="radio" name="gender" value="Male" required>
                </div>
                <div class="inner" style="margin-left:-500px">
                    <label style="margin-left:50px">Female</label>
                    <input type="radio" name="gender" value="Female" required>
                </div>
            </div>

            <button type="submit" class="submitbtn">Print Details...!</button>
        </div>

    </form>


</body>

</html>