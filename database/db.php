<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "car_rental_system"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>