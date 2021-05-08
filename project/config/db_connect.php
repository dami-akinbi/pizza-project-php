<?php

// connect to database
$conn = mysqli_connect('localhost', 'shaun', 'wifirocks266', 'ninja_pizza');

// check the connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
