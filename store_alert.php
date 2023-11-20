<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

// Prepare and bind the data
$stmt = $conn->prepare("INSERT INTO alerts (alert_message, alert_level, timestamp) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $flood_alert, $alert_level, $timestamp);

// Set parameters and execute
$flood_alert = $_POST["alert_message"];
$alert_level = $_POST["alert_level"];
$timestamp = date('Y-m-d H:i:s');

if ($stmt->execute()) {
    echo "Alert added successfully";
} else {
    echo "Cannot add Alert Message";
}

// Retrieve the currently logged-in employee_id
$currentEmployeeId = $_SESSION['employee_id'];

// Insert into logs table with the currently logged-in employee_id
$section = "Alerts";
$description = "Added an Emergency Alert";
$date_time = date('Y-m-d H:i:s');
$logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
if ($conn->query($logSql) !== TRUE) {
    echo "Error inserting into logs: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
