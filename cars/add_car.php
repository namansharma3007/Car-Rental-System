<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental - Add Car</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<?php
    include('../includes/header.php')
?>

<div class="container">
        <h2 class="display-5">Add car</h2>
        <form method="post" action="./addCarValidation.php">
            <div class="mb-3">
                <label for="vehicleModel" class="form-label">Vehicle Model</label>
                <input type="text" class="form-control" id="vehicleModel" aria-describedby="textHelp"
                    name="vehicle_model" required>
            </div>
            <div class="mb-3">
                <label for="vehicleNumber" class="form-label">Vehicle Number</label>
                <input type="text" class="form-control" id="vehicleNumber" aria-describedby="textHelp"
                    name="vehicle_number" required>
            </div>
            <div class="mb-3">
                <label for="seatingCapacity" class="form-label">Seating Capacity</label>
                <input type="text" class="form-control" id="seatingCapacity" aria-describedby="textHelp"
                    name="seating_capacity" required>
            </div>
            <div class="mb-3">
                <label for="rentPerDay" class="form-label">Rent Per Day</label>
                <input type="text" class="form-control" id="rentPerDay" aria-describedby="textHelp"
                    name="rent_per_day" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Car</button>
        </form>
    </div>
    
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>