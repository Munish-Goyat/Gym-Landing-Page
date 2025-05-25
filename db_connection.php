<?php
$host = "localhost";  // Hostname (usually localhost)
$username = "root";   // MySQL username (default is root)
$password = "";       // MySQL password (leave blank for XAMPP default)
$database = "pg_life"; // Name of your database

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}
?>
