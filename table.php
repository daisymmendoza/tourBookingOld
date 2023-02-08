<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tourbooking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE bookings (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
groupsize VARCHAR(10),
tourlocation VARCHAR(30),
tourdate VARCHAR(30),
tourtime VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table bookings created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>