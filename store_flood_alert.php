<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "disaster_ready";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the data
$stmt = $conn->prepare("INSERT INTO alerts (flood_alert, timestamp) VALUES (?, ?)");
$stmt->bind_param("ss", $flood_alert, $timestamp);

// Set parameters and execute
$flood_alert = $_POST["flood_alert"];
$timestamp = date('Y-m-d H:i:s');
if ($stmt->execute()) {
    echo "Alert added successfully";
} else {
    echo "Cannot add Alert Message";
}

$stmt->close();
$conn->close();
?>
