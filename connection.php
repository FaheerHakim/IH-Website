<?php
// Step 1: Connect to your database
$servername = "localhost"; // or your server name
$username = "IH_website"; // your username
$password = "InspireHealth2024"; // your password
$database = "InspireHealth"; // your database name

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Step 3: Display data in HTML
?>
