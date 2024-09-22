<?php
$servername = "localhost"; // Default for XAMPP
$username = "root"; // Default for XAMPP
$password = ""; // Leave blank for default
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
