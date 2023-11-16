<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();
$currentEmployeeId = $_SESSION['employee_id'];

// Insert into logs table with the currently logged-in employee_id
$section = "Session";
$description = "Logged Out";
$date_time = date('Y-m-d H:i:s');
$logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
if ($conn->query($logSql) !== TRUE) {
    echo "Error inserting into logs: " . $conn->error;
}

echo "Organizational Chart Updated Successfully";

// Logout code
session_destroy();
header('Location: login.php');
exit();
?>
