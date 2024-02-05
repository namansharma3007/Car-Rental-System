
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

<?php
    include('./includes/header.php')
?>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to Car Rental Agency</h1>
            <p class="lead">Your one-stop solution for renting cars.</p>
            <hr class="my-4">
            <p>Explore our available cars and start your journey today!</p>
            <a class="btn btn-primary btn-lg" href="/CAR_RENTAL/cars/available_cars.php" role="button">View Available Cars</a>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>