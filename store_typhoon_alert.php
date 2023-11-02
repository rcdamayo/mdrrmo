<?php
include 'db_connection.php';

// Prepare and bind the data
$stmt = $conn->prepare("INSERT INTO alerts (typhoon_alert, timestamp) VALUES (?, ?)");
$stmt->bind_param("ss", $typhoon_alert, $timestamp);

// Set parameters and execute
$typhoon_alert = $_POST["typhoon_alert"];
$timestamp = date('Y-m-d H:i:s');
if ($stmt->execute()) {
    echo "Alert added successfully";
} else {
    echo "Cannot add Alert Message";
}

$stmt->close();
$conn->close();
?>
