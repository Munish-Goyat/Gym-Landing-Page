<?php
$servername = "localhost";
$username = "root"; // or your DB username
$password = "";     // or your DB password
$database = "gym_membership"; // replace with your DB name

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
