<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "reservation_system";
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$datetime = $_POST["datetime"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$seats = $_POST["seats"];

// Insert the data into the database
$sql = "INSERT INTO reservations (datetime, name, phone, seats) VALUES ('$datetime', '$name', '$phone', '$seats')";
if (mysqli_query($conn, $sql)) {
  echo "Reservation saved successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
