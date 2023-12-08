<?php
$servername = "localhost";  // Replace with your MySQL server's hostname if different
$username = "root";         // Replace with your MySQL username
$password = "";             // Replace with your MySQL password if set

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();
?>