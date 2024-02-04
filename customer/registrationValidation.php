<?php
include('../database/db.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve user input from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Check if password and confirm password match
    if ($password !== $confirmPassword) {
        echo "<script>alert('Password and Confirm Password do not match.'); window.location.href='./registration_customer.php';</script>";
        exit;
    }

    // Check if the email is already registered
    $checkEmailQuery = "SELECT * FROM customers WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        echo "<script>alert('Email address is already registered. Please use a different email.'); window.location.href='./registration_customer.php';</script>";
        exit;
    }

    // Insert user data into the database
    $insertQuery = "INSERT INTO customers (customer_id, password, full_name, email, phone_number, created_at) VALUES (NULL, '$password', '$name', '$email', '$phone_number', current_timestamp())";
    
    if ($conn->query($insertQuery)) {
        $_SESSION['registrationSuccess'] = true;
        header('Location: ../login/customerlogin.php');
        exit;
    } else {
        echo "<script>alert('Registration failed. Please try again.'); window.location.href='./registration_customer.php';</script>";
        exit;
    }
} else {
    // If the form is not submitted through POST, redirect to the registration page
    header('Location: ./registration_customer.php');
    exit;
}

$conn->close();
?>
