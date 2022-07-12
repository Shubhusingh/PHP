<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "TESTDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Students_attendence (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
STATUS ENUM NOT NULL,
Studentid Int(30) NOT NULL,
MON ENUM NOT NULL, Tue ENUM NOT NULL, wed ENUM NOT NULL)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();
?>