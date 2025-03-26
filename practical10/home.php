<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "practical10";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get employee information
$email = $_SESSION['email'];
$sql = "SELECT * FROM employee WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$employee = mysqli_fetch_assoc($result);

// Handle photo upload
if (isset($_POST['upload_photo'])) {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $target_dir = "uploads/";
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            // Update the profile_photo column in the database
            $update_sql = "UPDATE employee SET profile_photo='$target_file' WHERE email='$email'";
            mysqli_query($conn, $update_sql);
        }
    }
}

// Handle profile deletion
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $sql = "DELETE FROM employee WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        session_destroy();
        header("location: login.php");
        exit();
    }
}

// Handle logout
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
        .navbar {
            background-color: #333;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .navbar a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        
        .container {
            padding: 20px;
        }
        
        .info-box {
            border: 1px solid #ccc;
            padding: 15px;
            max-width: 500px;
            margin-bottom: 20px;
        }
        
        .photo-upload {
            margin: 20px 0;
        }
        
        .profile-photo {
            max-width: 200px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
        <a href="#" onclick="showInfo()">Display Info</a>
        <a href="?action=delete" onclick="return confirm('Are you sure you want to delete your profile?')">Delete Profile</a>
        <a href="?action=logout" style="float:right">Log Out</a>
    </div>

    <!-- Employee Information -->
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
            <p><strong>Mobile No:</strong> <?php echo $employee['mono']; ?></p>
            <p><strong>Gender:</strong> <?php echo $employee['gender']; ?></p>
        </div>

        <!-- Photo Upload Section -->
        <div class="photo-upload" id="photo-upload">
            <h3>Add Profile Photo</h3>
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="photo" accept="image/*">
                <input type="submit" name="upload_photo" value="Upload">
            </form>
            <?php 
            if (isset($target_file)) {
                echo "<p>Photo uploaded successfully</p>";
            }
            ?>
        </div>
    </div>

    <!-- <script>
        function showInfo() {
            document.getElementById('employeeInfo').style.display = 'block';
            document.getElementById('employeeInfo').scrollIntoView();
        }
    </script> -->
</body>
</html>

<?php
mysqli_close($conn);
?>