
<html>
<head>
    <title>Fashion Feet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <nav>
            <div class="logo">
                <h1>Fashion Feet</h1>
            </div>
            <ul>
                
                <li><a href="home1.php">Home</a></li>
                <li><a href="addprod.php">Add Products</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="changepass.php">Change Password</a></li>
                <li><a href="home.php">Logout</a></li>
            </ul>
        </nav>
        <br><br><br>
             <br><br><br>
             <br><br><br>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 8px #6c14d0;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background: linear-gradient(to right, #c72092 , #6c14d0);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
    <div class="container">
        <h2>Change Password</h2>
        <br><br>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="uname" required placeholder="Type Your Username...">
            </div>
            <div class="form-group">
                <label for="password">New Password:</label>
                <input type="password" id="password" name="pass" required placeholder="Type Your New Password...">
            </div>
            <div class="form-group">
            <center><input type="submit" value="Change Password"> </center>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST["uname"];
    $newPassword = $_POST["pass"];

    $sql = "UPDATE users SET password = ? WHERE username = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ss", $newPassword, $username);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<p style='color: red; text-align: center;'>Password changed successfully.</p>";
        } else {
            echo "<p style='color: red; text-align: center;'> Failed to change password. Please check your username.</p>";
        }

        $stmt->close();
    } else {
        echo "Database error: " . $conn->error;
    }

    $conn->close();
}
?>



    