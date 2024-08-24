<?php
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "seakers"; 
$conn = new mysqli('localhost', 'root', '', 'seakers');
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
?>
