<!DOCTYPE html>
<html>

<head>
    <title>Fashion Feet</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 8px #6c14d0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #40b736;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        
    </style>
</head>

<body>
    <section>
        <nav>
            <div class="logo">
                <h1>Fashion Feet</h1>
            </div>
            <ul class="nav-links">
                <li><a href="home1.php">Home</a></li>
                <li><a href="addprod.php">Add Products</a></li>
                <li><a href="customer.php">Customer</a></li>
                <li><a href="changepass.php">Change Password</a></li>
                <li><a href="home.php">Logout</a></li>
            </ul>
        </nav>
        <br><br><br><br><br>
        <div class="container">
            <table>
                <tr>
                    <th>Card Holder Name</th>
                    <th>Card Number</th>
                    <th>Expiry Date</th>
                    <th>CVV</th>
                    <th>Address</th>
                </tr>
                <?php
                include 'connect.php';
                $sql = "SELECT * FROM payment_details";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) 
                    {
                        echo "<tr>";
                        echo "<td>" . $row['cardholder_name'] . "</td>";
                        echo "<td>" . $row['card_number'] . "</td>";
                        echo "<td>" . $row['expiry_date'] . "</td>";
                        echo "<td>" . $row['cvv'] . "</td>";
                        echo "<td>" . $row['billing_address'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No payment details found.</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </section>
</body>

</html>
