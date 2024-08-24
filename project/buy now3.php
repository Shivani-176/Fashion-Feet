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
         <br><br><br><br><br><br>
         <center>
<style>
        
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        padding: 0;
    }
    .product-container {
        text-align: center;
        margin-top: 50px;
        box-shadow: 0 0 8px #6c14d0;
        padding: 5px; 
        background-color: #fff; 
        border-radius: 10px;
        width:330; 
    }

        .product-image {
            max-width: 150px;
            height: 150px;
            margin-bottom: 15px;
        }

        .product-price {
            font-size: 24px;
            color: #333;
        }

        .product-name {
            font-size: 18px;
            color: #555;
            margin-bottom: 10px;
        }

        .product-info h2 {
            font-size: 16px;
            color: #777;
        }

        .select-label {
            margin-right: 25px;
            font-size: 17px;
            color: #777;
        }

        .select-box {
            padding: 5px;
            font-size: 13px;
        }

        
        .buy-button {
        background: linear-gradient(to right, #c72092, #6c14d0);
        color: #fff;
        border: none;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px 5px;
        cursor: pointer;
    }

    .buy-button:hover {
        background: linear-gradient(to right, #c72092, #6c14d0);
    }

    .button-container {
        text-align: left;
    }

    .big-button {
        font-size: 20px;
        padding: 10px 30px;
        background: linear-gradient(to right, #c72092, #6c14d0);
        color: #fff; 
    }

  
    </style>
    <form><div class="button-container">
    <input type="button" value="Go back!" onclick="history.back()" class="big-button">
   <center>
    <div class="product-container">
        <div class="image">
            <img src="images/shoes10.png" class="product-image" alt="Product Image">
        </div>

        <h2>Rs.649</h2>
          <p>
                <h3><b>Alvery</b> Height Incresing Best Shoes</h3>
          </p>
              

        <h2>
            <label class="select-label" for="size">Size:</label>
            <select id="size" name="size" class="select-box" required>
                <option value="3UK">3UK</option>
                <option value="4UK">4UK</option>
                <option value="5UK">5UK</option>
                <option value="6UK">6UK</option>
            </select>
        </h2>

        <h2>
            <label class="select-label" for="qty">QTY:</label>
            <select id="qty" name="qty" class="select-box" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </h2>
        <br>
        <a href="payment.php" class="buy-button">Pay Now</a>
    </center>
    
    </div>   
</body>
</html>
