<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/cs/style.css">
</head>
<body>

<?php
    include('../includes/header.php')
?>


<div class="container">
    <h2 class="display-5">Customer Registration</h2>
        <form method="post" action="./registrationValidation.php">
    
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputName" aria-describedby="textHelp" 
                name="name" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                name="email" required>
            </div>
            <div class="mb-3">
                <label for="phoneNumberInput" class="form-label">Phone Number</label>
                <input type="text" class="form-control" id="phoneNumberInput" aria-describedby="phoneHelp" 
                name="phone" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1"
                name="password" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" 
                name="confirmPassword" id="exampleInputConfirmPassword1" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>
</html>