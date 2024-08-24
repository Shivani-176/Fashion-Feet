<html>
<head>
    
    <title>Fashion Feet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>
        < <nav>
            <div class="logo">
                <h1>Fashion Feet</h1>
            
            </div>
            </div>

            <ul>
                
            <li><a href="home.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="whishlist.php"><img src="images/logo2.png"width="30" height="30"></a><li>  
                <!--li><a href="addtocard.php"><img src="images/logo1.png"width="40" height="30"></a><li-->
                <li><a href="login.php"><img src="images/logo3.png"width="30" height="30"></a><li>
            </ul>
         </nav>
         <br><br><br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <h1>Payment Details</h1>
        <form method="POST" action="#">
            <label for="cardNumber">Card Holder Name:</label>
            <input type="text" id="cardholder" name="cardholder" placeholder="Enter Name of Card Holder"required>

            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456"required>

            <label for="expiry">Expiry Date:</label>
            <input type="text" id="expiry" name="expiry" placeholder="MM/YY"required>

            <label for="cvv">CVV:</label>
            <input type="number" id="cvv" name="cvv" placeholder="123"required>
    
            <label for="des">Address:</label><textarea id="textarea" name="billing-address" rows="4" cols="40" placeholder=" Enter your Address" required></textarea>


<br><br>
          
            <center><button type="submit">Pay</button></center>
        </form>
    </div>
</body>
</html>



<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cardholder = $_POST['cardholder'];
    $cardNumber = $_POST['cardNumber'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $billingAddress = $_POST['billing-address'];

    $stmt = $conn->prepare("INSERT INTO payment_details (cardholder_name, card_number, expiry_date, cvv, billing_address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $cardholder, $cardNumber, $expiry, $cvv, $billingAddress);
    if ($stmt->execute()) {
   
        echo "<p style='color: red; text-align: center;'>Order Confirm..!</p>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
