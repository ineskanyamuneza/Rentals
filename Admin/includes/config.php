<?php
define('DB_HOST', "localhost");
define('DB_USER', "root");
define('DB_PASS', "sgtf");
define('DB_NAME', "rentals_db");

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    error_log('Error Establishing Database Connection: ' . mysqli_connect_error());
    die('There was an error connecting to the database. Please check the error log for details.');
}
?>
