<?php
session_start();

echo "<nav class='navbar navbar-expand-lg bg-body-tertiary bg-dark' data-bs-theme='dark'>
        <div class='container-fluid'>";

        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
            echo "<a class='navbar-brand' href='/car_rental/agency/dashboard.php'>Car Rental</a>";
        } else {
            echo "<a class='navbar-brand' href='/car_rental'>Car Rental</a>";
        }
        echo "<button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent'
                aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                <ul class='navbar-nav me-auto mb-2 mb-lg-0'>";

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // Case 1: Admin user
    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
        echo "<li class='nav-item'>
                <a class='nav-link active' href='#'>" . $_SESSION['username'] . " (Admin)</a>
            </li>
            <li class='nav-item'>
                <a class='btn btn-danger' href='../login/logout.php'>Logout</a>
            </li>";
    } else {
        // Case 2: Regular customer
        echo "<li class='nav-item'>
                <a class='nav-link active' href='#'>" . $_SESSION['email'] . "</a>
            </li>
            <li class='nav-item'>
                <a class='btn btn-danger' href='/car_rental/login/logout.php'>Logout</a>
            </li>";
    }
} else {
    // Case 3: User not logged in
    echo "<li class='nav-item'>
            <a class='nav-link active' href='/car_rental/customer/registration_customer.php'>Customer Registration</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link active' href='/car_rental/login/customerlogin.php'>Customer Login</a>
        </li>
        <li class='nav-item'>
            <a class='nav-link active' href='/car_rental/login/agencylogin.php'>Admin Login</a>
        </li>";
}

echo "</ul>
    </div>
</div>
</nav>";
?>
