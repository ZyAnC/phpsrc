<?php
$servername = " 192.168.247.1"; // Replace with your MySQL server hostname
$username = "yanzheng1214";     // Replace with your MySQL username
$password = "zy123456";     // Replace with your MySQL password
$dbname = "db";       // Replace with the name of your MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
