<?php
$servername = "localhost";   // Servername or IP
$username = "raspi";         // Username
$password = "raspi";         // Password
$dbname = "goodwe";          // Database
$tblname = "pv";             // Table 
$power = $_REQUEST['power']; // Column 
$datumzeit = date("Y-m-d H:i:s");

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "INSERT INTO pv (power, datumuhrzeit) VALUES ('$power', '$datumzeit')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  }
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
?>
