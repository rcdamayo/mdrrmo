<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

// Retrieve the currently logged-in employee_id
$currentEmployeeId = $_SESSION['employee_id'];

// Insert into logs table with the currently logged-in employee_id
$section = "Reports";
$description = "Downloaded a table to Excel";
$date_time = date('Y-m-d H:i:s');
$logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";

if ($conn->query($logSql) !== TRUE) {
    echo "Error inserting into logs: " . $conn->error;
}

$conn->close();
?>
