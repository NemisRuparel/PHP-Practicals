<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #000;
            font-family: Arial, Helvetica, sans-serif;
        }
        .container{
            width: 40%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10%;
            background-color: #555;
            box-shadow: 0px 0px 10px #fff;
        }
        label{
            color: #000;
            font-weight: 900;
        }
        input[type="text"],input[type="password"]{
            width: 97%;
            padding: 10px;
            margin: 10px 0;
        }
        input[type="submit"]{
            font-weight: 900;
            margin-left: 200px;
            width: 30%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>
    
        <form action="" method="POST">
            <div class="container">    
                <label for="uname">Enter UserName</label>
                <input type="text" name="uname" id="uname" required> <br>
                <label for="pass">Enter Password &nbsp;</label>
                <input type="password" name="pass" id="pass" required>
                <br>
                <input type="submit" value="Login">
            </div>
            </form>
</body>
</html>