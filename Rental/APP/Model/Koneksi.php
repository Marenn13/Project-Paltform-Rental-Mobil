<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbConnection = "projectuts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbConnection); // Menggunakan $database untuk memilih database

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>