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
$stmt = $conn->prepare("INSERT INTO flood_alert (alert_message, timestamp) VALUES (?, ?)");
$stmt->bind_param("ss", $alert_message, $timestamp);

// Set parameters and execute
$alert_message = $_POST["alert_message"];
$timestamp = date('Y-m-d H:i:s');
if ($stmt->execute()) {
    echo "Alert added successfully";
} else {
    echo "Cannot add Alert Message";
}

$stmt->close();
$conn->close();
?>
