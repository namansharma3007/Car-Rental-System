const dialog = document.getElementById('myDialog');

// Function to open the dialog and set the car_id
function openDialog(carId) {
    dialog.showModal();
    document.getElementById('car_id').value = carId;
}

// Add a click event to each "Rent Car" button
const rentButtons = document.querySelectorAll('.rent-car-btn');
rentButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        openDialog(this.dataset.carId);
    });
});

// Close the dialog and reset the form when the dialog is closed
const closeButton = document.getElementById('closeBtn');
closeButton.addEventListener("click", () => {
    dialog.close();
});
dialog.addEventListener('close', function () {
    dialog.close();
    document.getElementById('start-date').value = '';
    document.getElementById('num-days').value = '';
});

rentButtons.forEach(function (button) {
    button.addEventListener('click', function () {
        const carId = button.getAttribute('data-car-id');
        document.getElementById('carIdInput').value = carId;

        // Open the dialog
        const dialog = document.getElementById('myDialog');
        dialog.showModal();
    });
});

// Close the dialog when close button is clicked
closeButton.addEventListener('click', function () {
    const dialog = document.getElementById('myDialog');
    dialog.close();
});

// Close the dialog when clicking outside of it
dialog.addEventListener('click', function (event) {
    if (event.target === this) {
        this.close();
    }
});
