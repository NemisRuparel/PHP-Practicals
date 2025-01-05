<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: cursive;
        }

        body {
            margin-top: 100px;
            background-color: aquamarine;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            background-color: white;
            gap: 10px;
            border: 1px solid white;
            box-shadow: 0px 0px 20px black;
            width: 60%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 100px;
        }

        input, textarea {
            height: 50px;
            width: 90%;
            padding-left: 10px;
            border: 1px solid black;
            border-radius: 10px;
            margin: auto;
        }

        textarea {
            height: 80px;
        }

        

        button {
            color: white;
            background-color: black;
            border-radius: 10px;
            height: 50px;
            width: 150px;
            border: none;
            
            transition: all 0.3s;
            margin-left: 40%;
        }

        button:hover {
            color: black;
            background-color: white;
            border: 1px solid black;
        }

        .gender{
        display: flex;
        width: 950px;
        border-radius: 10px;
        margin-left: 45px;
        gap: 545px;
    }
.gender .inner{
    height: 60px;
    width: 200px;
    display: flex;
    border: 1px solid black;
    border-radius: 10px;
    align-items:center;
}
.gender input{

    height: 20px;
    width: 20px;
}
.gender label{
    font-size: 14px;
}
    </style>
</head>

<body>

    <form action="8.1.2.php" method="POST">


        <h1>Employee Information Form</h1>
        <input type="text" name="efirstname" placeholder="Enter first name" required>
        <input type="text" name="elastname" placeholder="Enter last name" required>
        <input type="text" name="eccompany" placeholder="Enter your current company" required>
        <input type="text" name="epcompany" placeholder="Enter your past company" required>
        <input type="text" name="eexperience" placeholder="Enter your experience (in years)" required>
        <input type="number" name="esalary" placeholder="Enter your salary (in ₹)" required>
        <input type="email" name="eemail" placeholder="Enter your email address" required>


        <input type="date" name="ebdate" required>
        <textarea name="eaddress" placeholder="Enter Address" required></textarea>
        <div class="gender">
            <div class="inner">
                <label style="margin-left:50px">Male</label>
                <input type="radio" name="gender" value="Male" required>
            </div>
            <div class="inner">
                <label style="margin-left:50px">Female</label>
                <input type="radio" name="gender" value="Female" required>
            </div>
        </div>
            <button type="submit" name="submit">Submit</button>
    </form>

</body>

</html>
