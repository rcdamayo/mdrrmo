<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

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

// Retrieve the currently logged-in employee_id
$currentEmployeeId = $_SESSION['employee_id'];

// Insert into logs table with the currently logged-in employee_id
$section = "Typhoon";
$description = "Added an Emergency Alert";
$date_time = date('Y-m-d H:i:s');
$logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
if ($conn->query($logSql) !== TRUE) {
    echo "Error inserting into logs: " . $conn->error;
}

$stmt->close();
$conn->close();
?>
