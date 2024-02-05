
-- Sample Car Names
INSERT INTO `cars` (`car_id`, `agency_id`, `vehicle_model`, `vehicle_number`, `seating_capacity`, `rent_per_day`, `booking_status`, `created_at`)
VALUES
(1, 1, 'Toyota Camry', 'ABC123', 5, 50.00, 0, current_timestamp()),
(2, 1, 'Honda Accord', 'XYZ789', 4, 45.00, 0, current_timestamp()),
(3, 1, 'Ford Mustang', 'DEF456', 2, 75.00, 0, current_timestamp()),
(4, 1, 'Altroz', 'jko2ag6039', 4, 50.00, 0, current_timestamp()),
(5, 1, 'Chevrolet Cruze', 'XYZ456', 4, 55.00, 0, current_timestamp()),
(6, 1, 'Ford Explorer', 'JKL789', 7, 80.00, 0, current_timestamp()),
(7, 1, 'Volkswagen Jetta', 'MNO123', 5, 60.00, 0, current_timestamp()),
(8, 1, 'Tesla Model 3', 'PQR789', 4, 100.00, 0, current_timestamp()),
(9, 1, 'Hyundai Sonata', 'GHI456', 5, 55.00, 0, current_timestamp()),
(10, 1, 'Mazda CX-5', 'JKL234', 5, 65.00, 0, current_timestamp());


-- Car Agencies
INSERT INTO `car_rental_agencies` (`agency_id`, `username`, `password`, `agency_name`, `email`, `phone_number`, `created_at`) VALUES
(1, 'admin', 'admin', 'Car Rental Agency', 'carrental@gmail.com', '999999999', current_timestamp());


-- Customers Name
INSERT INTO `customers` ( `password`, `full_name`, `email`, `phone_number`, `created_at`) VALUES
('1111', 'joe', 'joe@gmail.com', '999999999', current_timestamp()),
('123456789', 'william', 'william@gmail.com', '777777777', current_timestamp()),
('123456789', 'Vikram', 'vikram@gmail.com', '777777777', current_timestamp()),
('123', 'Naman Sharma', 'namansharma3007c@gmail.com', '+919682133002', current_timestamp());