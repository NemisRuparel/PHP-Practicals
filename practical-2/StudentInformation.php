<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
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
    </style>
</head>

<body>

    <form action="DisplayInformation.php" method="POST">
            <h1>Student Information Form</h1>
        <input type="text"name="sfirstname"placeholder="Enter first name">
        <input type="text"name="slastname"placeholder="Enter last name">
        <input type="date"name="sbdate">
        <input type="number"name="sage"placeholder="Enter Age">
        <textarea name="saddress" placeholder="Enter Address" rows="3" cols="46"></textarea>
        <button type="submit">Submit...!</button>
    </form>
    <?php

    ?>
</body>

</html>