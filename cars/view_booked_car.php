<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental - View Booked Cars</title>
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
        <h2 class="display-5">View Bookings</h2>

        <?php
        include('../database/db.php');

        // Fetch bookings from the database
        $bookingsQuery = "SELECT * FROM bookings";
        $result = $conn->query($bookingsQuery);

        if ($result->num_rows > 0) {
            echo '<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Booking ID</th>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Car ID</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">No of Days</th>
                            <th scope="col">End Date</th>
                        </tr>
                    </thead>
                    <tbody>';

            while ($booking = $result->fetch_assoc()) {
                echo '<tr>
                        <td>' . $booking['booking_id'] . '</td>
                        <td>' . $booking['customer_id'] . '</td>
                        <td>' . $booking['car_id'] . '</td>
                        <td>' . $booking['start_date'] . '</td>
                        <td>' . $booking['number_of_days'] . '</td>
                        <td>' . $booking['end_date'] . '</td>
                      </tr>';
            }

            echo '</tbody>
                  </table>';
        } else {
            echo '<p>No bookings found in the database.</p>';
        }

        $conn->close();
        ?>

    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>