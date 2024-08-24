
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
    
    <title>Fashion Feet</title>
    <br><br><br><br>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 7px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: linear-gradient(to right, #c72092 , #6c14d0);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>
        
        <form action="#" method="POST">
            <label for="name">Product Name:<label>
            <input type="text" id="name" name="name" required>

            <label for="des">Product Description</label><textarea id="textarea" name="des" rows="4" cols="40" required></textarea>

            <label for="price">Product Price:</label>
            <input type="text" id="price" name="price" required>
            <label for="price">Product Photo:</label>
            <input type="file" name="photo" required>
            <br><br>
           <center><button type="submit">Add Product </button></center>
        </form>
    </div>
</body>
</html>



