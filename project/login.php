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
            <li><a href="home.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="whishlist.php"><img src="images/logo2.png"width="30" height="30"></a><li>  
                <!--li><a href="addtocard.php"><img src="images/logo1.png"width="30" height="40"></a><li-->
                <li><a href="login.php"><img src="images/logo3.png"width="30" height="30"></a><li>
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
        <h2>Login Form</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required placeholder="Type Your Username...">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Type Your Password...">
            </div>
            <div class="form-group">
            <center><input type="submit" value="Login"> </center>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);


    if ($stmt->execute()) {
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            header('location: home1.php');
        } else {
            echo "<p style='color: red; text-align: center;'>Invalid username or password.</p>";
        }
    } else {
        echo "<p style='color: red; text-align: center;'>Error in query execution.</p>";
    }

    $stmt->close();
}
?>
