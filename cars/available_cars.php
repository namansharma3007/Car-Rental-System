<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental - Available Cars</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <dialog id="myDialog" class="mx-auto py-4 px-4 border rounded mt-5 position-relative">
        <button id="closeBtn" class="btn btn-dark position-absolute top-0 end-0 me-3 mt-3">X</button>
        <form id="bookingForm" method="post" action="./process_booking.php" class="m-3">
            <div class="mb-3">
                <label for="dateInput" class="form-label">Start date</label>
                <input type="date" class="form-control" id="dateInput" name="start_date" required>
            </div>
            <div class="mb-3">
                <label for="days" class="form-label">No of Days</label>
                <input type="number" class="form-control" id="days" name="num_days" required>
            </div>
            <input type="hidden" id="carIdInput" name="car_id">
            <button type="submit" name="rent_car" class="btn btn-primary">Submit</button>
        </form>
    </dialog>

    <?php
include('../includes/header.php');

include('../database/db.php');

echo "<div class='container-fluid py-2 px-5'>";
echo "<h1 class='display-5'>View available cars</h1>";
echo '<div class="d-flex flex-wrap gap-2">';  // Start of row

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0) {
    while ($car = $result->fetch_assoc()) {
        if ($car['booking_status'] != 1) {
            echo '<div class="card" style="width: 15rem;">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $car['vehicle_model'] . '</h5>';
            echo '<p class="card-text">Vehicle Number: ' . $car['vehicle_number'] . '</p>';
            echo '<p class="card-text">Seating Capacity: ' . $car['seating_capacity'] . '</p>';
            echo '<p class="card-text">Rent per Day: $' . $car['rent_per_day'] . '</p>';
            echo '<button class="btn btn-primary rent-car-btn" data-car-id="' . $car['car_id'] . '">Rent Car</button>';
            echo '</div>';
            echo '</div>';
            $count++;
        }
    }
}
if($count == 0){
    echo '<p>No cars found to be rented.</p>';
}

echo '</div>';  // End of row
echo '</div>';

$conn->close();
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>