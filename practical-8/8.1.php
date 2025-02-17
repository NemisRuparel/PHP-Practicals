<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    margin-top: 125px;
    background-color: aliceblue;
}
form{
    display: flex;
    flex-direction: column;
    background-color: aliceblue;
    gap: 10px;/
    border: 1px solid black;
    width: 60%;
    margin-left: 15%;
    padding: 20px;
    border-radius: 10px;
    background-color: cadetblue;


}
input,textarea{
    height: 60px;
    width: 550px;
    margin-left: 24%;
    padding-left: 20px;
    border: 1px solid black;
    border-radius: 10px;
    
}
input::placeholder{
    color: black;
    padding-left: 10px;
}

textarea::placeholder{
    color: black;
    padding-left: 10px;
    padding-top: 15px;
}
button{
    color: white;
    background-color: black;
    border-radius: 10px;
    height: 50px;
    width: 25%;
    margin-left: 39%;
    border: none;
    transition: all .5s;
}
button:hover{
    color: black;
    background-color: white;
}
h1{
    text-align: center;
}
#display-info{
    width: 500px;
    margin-left: 425px;
    margin-top: 90px; 
    background-color: cadetblue;
        color: black;
        padding: 3%;
        border-radius: 30px;
        font-size: x-large;
        
    }
    #display-info{
        text-align: center;
    }

    </style>
</head>

<body>

    <form action="8.1.php" method="POST">
            <h1>Employee Information Form</h1>
        <input type="text"name="sfirstname"placeholder="Enter first name">
        <input type="text"name="slastname"placeholder="Enter last name">
        <input type="date"name="sbdate">
        <input type="number"name="sage"placeholder="Enter Age">
        <textarea name="saddress" placeholder="Enter Address" rows="3" cols="46"></textarea>
        <button type="submit">Submit...!</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Employee_first_name = $_POST['sfirstname'];
    $Employee_last_name = $_POST['slastname'];
    $Employee_birth_date = $_POST['sbdate'];
    $Employee_age = $_POST['sage'];
    $Employee_address = $_POST['saddress'];
$Employee_info = "
    <div id='display-info'>
    <h2>Employee Information</h2>
    <p>Employee First Name Is : $Employee_first_name</p>
    <p>Employee Last Name Is : $Employee_last_name</p>
    <p>Employee  Birth Date Is : $Employee_birth_date</p>
    <p>Employee Age Is :  $Employee_age</p>
    <p>Employee Address Is : $Employee_address</p>
    </div>
    <br><br>
    ";
echo $Employee_info;
    }
?>
</body>

</html>