<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: login.php");
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical10";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Sorry ..! There was some problem occured <br> Please try again later ..!";
}


$email = $_SESSION['email'];
$sql = "SELECT * FROM employee WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$employee = mysqli_fetch_assoc($result);

if (isset($_POST['upload_photo'])) {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 777, true);
        }
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $update_sql = "UPDATE employee SET profile_photo='$target_file' WHERE email='$email'";
            mysqli_query($conn, $update_sql);
        }
    }
}


if (isset($_POST['change_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $check_sql = "SELECT password FROM employee WHERE email='$email'";
    $check_result = mysqli_query($conn, $check_sql);
    $row = mysqli_fetch_assoc($check_result);

    if ($row['password'] === $current_password) {
        if ($new_password === $confirm_password) {
            $update_sql = "UPDATE employee SET password='$new_password' WHERE email='$email'";
            if (mysqli_query($conn, $update_sql)) {
                $password_message = "Password changed successfully!";
            } else {
                $password_message = "Error changing password.";
            }
        } else {
            $password_message = "New password and confirmation do not match.";
        }
    } else {
        $password_message = "Current password is incorrect.";
    }
}


if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $sql = "DELETE FROM employee WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        session_destroy();
        header("location: login.php");
        exit();
    }
}


if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Home - Employee Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .navbar {
            background-color: #2c3e50;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        
        .navbar a {
            float: left;
            color: #ecf0f1;
            text-align: center;
            padding: 15px 20px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        
        .navbar a:hover {
            background-color: #3498db;
            color: #fff;
        }
        
        .navbar a.logout {
            float: right;
            background-color: #e74c3c;
        }
        
        .navbar a.logout:hover {
            background-color: #c0392b;
        }
        
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        h2 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        
        .info-box {
            padding: 20px;
            margin-bottom: 20px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }
        
        .info-box p {
            margin: 10px 0;
            font-size: 16px;
            color: #34495e;
        }
        
        .info-box p strong {
            color: #2c3e50;
        }
        
        .photo-upload, .password-change {
            margin: 20px 0;
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }
        
        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 15px;
            box-shadow: 0 0 15px black;
        }
        
        input[type="file"], input[type="password"], input[type="submit"] {
            margin: 10px 0;
            padding: 8px;
            width: 100%;
            max-width: 300px;
            border: 1px solid #bdc3c7;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        
        .message {
            color: #27ae60;
            margin: 10px 0;
            font-weight: bold;
        }
        
        .error {
            color: #c0392b;
            margin: 10px 0;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="#">Display Info</a>
        <a href="#photo-upload">Add Profile Photo</a>
        <a href="#password-change">Change Password</a>
        <a href="?action=delete" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</a>
        <a href="?action=logout" class="logout">Log Out</a>
    </div>

    <div class="container">
        <h2>Welcome, <?php echo $employee['name']; ?></h2>
        
        <div class="info-box" id="employeeInfo">
            <?php if (!empty($employee['profile_photo'])): ?>
                <img src="<?php echo $employee['profile_photo']; ?>" class="profile-photo" alt="Profile Photo">
            <?php else: ?>
                <p>No profile photo uploaded yet.</p>
            <?php endif; ?>
            <p><strong>Name:</strong> <?php echo $employee['name']; ?></p>
            <p><strong>Current Company:</strong> <?php echo $employee['currcomp']; ?></p>
            <p><strong>Past Company:</strong> <?php echo $employee['pastcomp']; ?></p>
            <p><strong>Experience:</strong> <?php echo $employee['exp']; ?> years</p>
            <p><strong>Email:</strong> <?php echo $employee['email']; ?></p>
            <p><strong>Mobile No:</strong> <?php echo $employee['mobileno']; ?></p>
            <p><strong>Gender:</strong> <?php echo $employee['gender']; ?></p>
        </div>

        <div class="photo-upload" id="photo-upload">
            <h3>Add Profile Photo</h3>
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="photo" accept="image/*">
                <input type="submit" name="upload_photo" value="Upload">
            </form>
            <?php 
            if (isset($target_file)) {
                echo "<p class='message'>Photo uploaded successfully</p>";
            }
            ?>
        </div>

        <div class="password-change" id="password-change">
            <h3>Change Password</h3>
            <form method="POST">
                <input type="password" name="current_password" placeholder="Current Password" required>
                <input type="password" name="new_password" placeholder="New Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm New Password" required>
                <input type="submit" name="change_password" value="Change Password">
            </form>
            <?php 
            if (isset($password_message)) {
                $class = (strpos($password_message, 'successfully') !== false) ? 'message' : 'error';
                echo "<p class='$class'>$password_message</p>";
            }
            ?>
        </div>
    </div>

</body>
</html>

<?php
mysqli_close($conn);
?>