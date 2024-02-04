<?php
include('../database/db.php');

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);


    if ($result->num_rows == 1) {
        $_SESSION['email'] = $email; 
        $_SESSION['loggedin'] = true;
        $_SESSION['admin'] = false;
        $customerDetail = $result->fetch_assoc();
        $_SESSION['customer_id'] = $customerDetail['customer_id'];

        echo "<script>alert('Logged in Successfully.');window.location.href='../cars/available_cars.php';</script>";
        exit;
    } else {
        echo "<script>alert('Please check your credentials again.');window.location.href='./customerlogin.php';</script>";
        exit;
    }
    
    $conn->close();
    }
?>
