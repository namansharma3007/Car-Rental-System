<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS car_rental_system";
$conn->query($createDatabaseQuery);

// Select the database
$conn->select_db("car_rental_system");

$sqlFilePath = __DIR__ . '/car_rental_system.sql';

$sqlFile = file_get_contents($sqlFilePath);

$queries = explode(';', $sqlFile);

// Execute each query sequentially
foreach ($queries as $query) {
    // Trim the query to remove whitespaces
    $trimmedQuery = trim($query);

    // Execute the query if it's not empty
    if (!empty($trimmedQuery)) {
        // Execute the query
        $conn->query($trimmedQuery);
    }
}

// Close the connection
$conn->close();
?>
