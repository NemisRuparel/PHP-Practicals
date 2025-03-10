<!DOCTYPE html>
<html>
<head>
    <title>Select Movie</title>
    <style>
        *{
           margin: 0;
           padding: 0; 
            font-family: cursive;
        }

        h2{
            text-align: center;
            font-size: 26px;
            color: #000;
    text-shadow: 0px 0px 10px black;
            /* margin-top: 100px; */
        }
        body{
            background-color: beige;
        }
        .container{
            margin-top: 5%;
            margin-left:250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* justify-items: center; */
            
            
        }
        label{
            font-size: large;
            font-weight: 800;
        }
        .main{
            width: 800px;
            border: 1px solid white;
            border-radius: 10px;
            background-color: white;
            padding: 10px;
            margin-top: 290px;
            margin-left: 500px;
            box-shadow: 0px 0px 20px black;
        }
        form button {
            width: 150px;
            height: 50px;
            transition: all .3s;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            background-color: white;
            border: 1px solid white;
            border-radius: 10px;
            background-color: black;
            color: white;
            margin-left: 100px;
        }
        form button:hover {
            background-color: white;
            color: black;
            border: 1px solid white;
            border-radius: 10px;
        }
        </style>
</head>
<body>

<div class="main">

    <h2>Choose a Movie</h2>
    <div class="container">
        
        <form action="8.3.2.php" method="get">
            <label for="movie">Select Movie:</label>
            <select id="movie" name="movie"style="width:213px">
                <option value="The Godfather">The Godfather</option>
                <option value="Titanic">Titanic</option>
                <option value="Avatar">Avatar</option>
            </select>
            <br><br><br>
            <label for="time">Select Time:</label>
            <select id="time" name="time"style="width:221px">
            <option value="10:00 AM">10:00 AM</option>
            <option value="2:00 PM">2:00 PM</option>
            <option value="6:00 PM">6:00 PM</option>
        </select>
<br><br><br>
        
<label for="theater">Select Theater:</label>
<select id="theater" name="theater"style="width:200px">
    <option value="The Globe Theatre (London)">The Globe Theatre (London)</option>
    <option value="The Royal Opera House (London)">The Royal Opera House (London)</option>
    <option value="Broadway (New York City)">Broadway (New York City)</option>
</select>
<br><br><br>

<button type="submit">Book Ticket</button>
</div>
</div>
    </form>
</body>
</html>
