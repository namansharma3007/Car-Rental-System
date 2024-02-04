<?php
session_start();
session_destroy();
header('Location: /car_rental');
exit;
?>