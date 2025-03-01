<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
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
        form input, form button {
            display: block;
            width: 50%;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.200), 0 6px 20px 0 rgba(0, 0, 0, 0.200);
        }
        .container{}
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
        p{
            font-size: 30px;
            text-align: center;
        }
        #btn1{
            margin-left: 690px;
        }
        #btn2{
            margin-left: -535px;
        }
        table{
            border: 4px solid black;
            margin-left: 580px;
            border-collapse: collapse;
            background-color:rgba(35, 200, 145, 0.53);
        }
        tr,td{
            width: 500px;
            border: 3px solid black;
            padding: 20px;
        }
    </style>
    
</head>
<body>
    <form action="6.1.php" method="POST">
        <h1>String Functions</h1>
        <input type="text"name="str" placeholder="Enter String">
        <input type="text"name="str_word" placeholder="Enter String to replace">
        <input type="text"name="str_replaced" placeholder="Enter String to replace with">
        <div style="display:flex;">
            <button type="submit" name="submit"id="btn1">Display</button>
            <button name="clr"id="btn2">Clear Result</button>
            
        </div>
        <br><br>
        
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $ipstr = $_POST["str"];
            $lower_string=strtolower($ipstr);
            $reversed_string=strrev($ipstr);
            $trimmed_string=trim($ipstr);
            $str_rep_word =$_POST["str_word"];
            $str_rep_word_with = $_POST["str_replaced"];

            if (isset($_POST["submit"]) && !empty($_POST["str"])) {
                
                
                echo "
                <h1>Result</h1>
                <table>

                <tr>
                    <td><p><b>Main String</b></p></td>
                    <td><p>$ipstr</p></td>
                </tr>
                <tr>
                 <td><p><b>Lowered String</b></p></td>
                 <td><p>$lower_string</p></td>
                 </tr>
                 <tr>
                    <td><p><b>Reversed String</b></p></td>
                    <td><p>$reversed_string</p></td>
                </tr>
                <tr>
                <td><p><b>WhiteSpace Removed String</b></p>
                <td><p>$trimmed_string</p></td>
                </tr>
                <tr>
                <td><p><b>".$str_rep_word." Replaced With ".$str_rep_word_with." is</b></p></td>
                <td><p>".str_replace($str_rep_word,$str_rep_word_with,$ipstr)."</p></td>
                </td>
                </table>
                ";
          
                
            }
        }
    ?>
</body>
</html>