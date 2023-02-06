<?php
    // Server with default settings
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "tourbooking";

    // Establishing connection
    $conn = mysqli_connect($host, $username, $password, $database);

    // Delivers error message when connection isn't established
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>