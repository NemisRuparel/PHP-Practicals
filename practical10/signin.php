<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>User Information Form</h2>
        <form method="POST" action="auth.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" maxlength="50" required>
            </div>

            <div class="form-group">
                <label for="currcomp">Current Company</label>
                <input type="text" id="currcomp" name="currcomp" maxlength="50">
            </div>

            <div class="form-group">
                <label for="pastcomp">Past Company</label>
                <input type="text" id="pastcomp" name="pastcomp" maxlength="50">
            </div>

            <div class="form-group">
                <label for="exp">Years of Experience</label>
                <input type="number" id="exp" name="exp" min="0" max="99" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" maxlength="30" required>
            </div>

            <div class="form-group">
                <label for="mono">Mobile Number</label>
                <input type="number" id="mono" name="mono" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" maxlength="12" required>
            </div>

            <input type="submit" value="Submit" name="submitbtn">
        </form>

    </div>
</body>
</html>