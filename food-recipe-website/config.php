<?php
// Database connection variables
$servername = "localhost"; // Server address
$username = "root";        // Default username for XAMPP
$password = "";            // Default password for XAMPP is empty
$dbname = "food_recipe_db"; // Name of your database in phpMyAdmin

// Create connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
