<?php
include('../database/db.php');

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM car_rental_agencies WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);


    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username; 
        $_SESSION['admin'] = true;
        $_SESSION['loggedin'] = true;

        echo "<script>alert('Logged in Successfully.');window.location.href='../agency/dashboard.php';</script>";
        exit;
    } else {
        echo "<script>alert('Please check your credentials again.');window.location.href='./agencylogin.php';</script>";
        exit;
    }

    $conn->close();
    }
?>