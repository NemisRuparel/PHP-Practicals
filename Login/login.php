<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #eee;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            width: 20%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #aaa;
            border-radius: 5px;
            margin-top: 20%;
            background-color: #aaa;
            box-shadow: 0px 0px 30px #000;
            /* border */
        }
        label{
            color: #000;
            font-weight: 900;
            /* margin-left:100px; */
        }
        input[type="text"],input[type="password"]{
            width: 92%;
            padding: 10px;
            margin: 10px 0;
            border:1px solid #fff;
            border-radius:10px;
        }
        input[type="submit"]{
            font-weight: 900;
            margin-left: 120px;
            width: 30%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
            border:1px solid #000;
            border-radius:10px;
            transition:.5s;
            box-shadow: 0px 0px 10px #000;

        }
        input[type="submit"]:hover{
            border:1px solid #555;
            background-color: #555;
            color: #eee;
            box-shadow: 0px 0px 10px #000;
        }
    
    </style>
</head>
<body>
    
        <form action="authentication.php" method="POST">
            <div class="container">    
                <label for="uname">Enter UserName</label> <br>
                <input type="text" name="uname" id="uname" required> <br> <br>
                <label for="pass">Enter Password &nbsp;</label> <br>
                <input type="password" name="pass" id="pass" required>
                <br>
                <input type="submit" name="btn" value="Login">
                <br><br>
    
            </div>
            </form>
</body>
</html>