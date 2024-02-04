<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
        echo "<script>alert('You cannot book a car as an admin.'); window.location.href='./available_cars.php';</script>";
        exit;
    } else {
        include('../database/db.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rent_car'])) {
            $car_id = $_POST['car_id'];
            $start_date = $_POST['start_date'];
            $num_days = $_POST['num_days'];
            $customer_id = $_SESSION['customer_id'];

            $insertBookingQuery = "INSERT INTO bookings (customer_id, car_id, start_date, number_of_days) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($insertBookingQuery);
            $stmt->bind_param('iiss', $customer_id, $car_id, $start_date, $num_days);
            $carData = "SELECT * FROM cars where car_id = '$car_id'";
            $result = $conn->query($carData);
            $carInfo = $result->fetch_assoc();
            $car_rent = $num_days * $carInfo['rent_per_day'];
            if ($stmt->execute()) {
                // Update the booking status to 1 for the selected car_id
                $updateBookingStatusQuery = "UPDATE cars SET booking_status = 1 WHERE car_id = ?";
                $stmt = $conn->prepare($updateBookingStatusQuery);
                $stmt->bind_param('i', $car_id);

                if ($stmt->execute()) {
                    echo "<script>alert('Car booked successfully. RENT=$" . $car_rent . "'); window.location.href='./available_cars.php';</script>";
                    exit;
                } else {
                    echo "<script>alert('Failed to update booking status.'); window.location.href='./available_cars.php';</script>";
                    exit;
                }
            } else {
                echo "<script>alert('Failed to book the car.'); window.location.href='./available_cars.php';</script>";
                exit;
            }
        } else {
            header('Location: ./available_cars.php');
            exit;
        }

        $conn->close();
    }
} else {
    echo "<script>window.location.href='../login/customerlogin.php';</script>";
    exit;
}
?>
