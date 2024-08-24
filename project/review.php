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
            background: linear-gradient(to right, #c72092 , #6c14d0);
        }
    </style>
</head>
    <div class="container">
        <h2>Review Form</h2>
        <br>
        <form>
                <div class="form-group">
                    <label for="review-title">Review Title</label>
                    <input type="text" id="review-title" name="review-title" required placeholder="Type Your Review Title...">
                </div>
                <div class="form-group">
                    <label for="reviewer-name">Your Name</label>
                    <input type="text" id="reviewer-name" name="reviewer-name" required placeholder="Type Your Name...">
                </div>
                <div class="form-group">
                    <label for="review-text">Your Review</label><textarea id="textarea" name="textarea" rows="4" cols="40" placeholder="Type Your Review..."></textarea>
                </div>
                
                    </select>
                
                <div class="form-group">
                <center><input type="submit" value="Submit Review"> </center>
            </div>
            </form>
    </div>
</body>
</html> 

