<?php
include('../database/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize input
    $vehicleModel = $_POST['vehicle_model'];
    $vehicleNumber = $_POST['vehicle_number'];
    $seatingCapacity = $_POST['seating_capacity'];
    $rentPerDay = $_POST['rent_per_day'];


    $checkVehicleNumber = "SELECT * FROM cars WHERE vehicle_number = '$vehicleNumber'";
    $result = $conn->query($checkVehicleNumber);

    if ($result->num_rows > 0) {
        echo "<script>alert('This car already exists.'); window.location.href='./add_car.php';</script>";
        exit;
    }

    // Insert car details into the database
    $insertQuery = "INSERT INTO cars (car_id, agency_id, vehicle_model, vehicle_number, seating_capacity, rent_per_day, booking_status, created_at) 
                    VALUES (NULL, '1', '$vehicleModel', '$vehicleNumber', '$seatingCapacity', '$rentPerDay', '0', current_timestamp())";
    
    if ($conn->query($insertQuery)) {
        echo "<script>alert('Car added successfully.'); window.location.href='./add_car.php';</script>";
    } else {
        echo "<script>alert('Error adding car.'); window.location.href='./add_car.php';</script>";
    }

    $conn->close();
} else {
    header('Location: ./add_car.php');
    exit;
}
?>