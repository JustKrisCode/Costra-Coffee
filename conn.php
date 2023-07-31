<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "coffee";

// Create connection and check connection
$conn = new mysqli($servername, $username, $password, $db) or die("Connection failed: " . $conn->connect_error);
?>