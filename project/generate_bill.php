<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Generated Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 8px #6c14d0;
        }
        h1 {
            text-align: center;
            color: #6c14d0;
        }
        h2 {
            color: #333;
        }
        p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Generated Bill</h1>

        <!-- Display Payment Details -->
        <?php
        include 'connect.php';

        $sql = "SELECT * FROM payment_details";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h2>Payment Details:</h2>";
                echo "<p>Card Holder Name: " . $row['cardholder_name'] . "</p>";
                echo "<p>Card Number: " . $row['card_number'] . "</p>";
                echo "<p>Expiry Date: " . $row['expiry_date'] . "</p>";
                echo "<p>CVV: " . $row['cvv'] . "</p>";
                echo "<p>Billing Address: " . $row['billing_address'] . "</p>";
            }
        } else {
            echo "No payment details found.";
        }

        ?>


        <?php
        $sql = "SELECT * FROM order_details"; 
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h2>Product Details:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "<p>Product Name: " . $row['product_name'] . "</p>";
                echo "<p>Quantity: " . $row['quantity'] . "</p>";
                echo "<p>Price: $" . $row['price'] . "</p>";
            
            }
        } else {
            echo "No product details found.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
