<?php
include 'admin_db_connection.php';
include 'db_connection2.php';
include 'db_connection.php';

session_start();

// Retrieve event details from the form
$event_date = $_POST['eventDate'];
$event_time = $_POST['eventTime'];
$event_name = $_POST['eventTitle'];
$event_description = $_POST['eventDescription'];

// Insert event data into the "events" table
$query = "INSERT INTO events (event_date, event_time, event_name, event_description) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

if ($stmt === false) {
    die('Error preparing statement.');
}

$stmt->bind_param('ssss', $event_date, $event_time, $event_name, $event_description);

$stmt->execute();

// Retrieve the currently logged-in employee_id
$currentEmployeeId = $_SESSION['employee_id'];

// Insert into logs table with the currently logged-in employee_id
$section = "Home";
$description = "Added an Event";
$date_time = date('Y-m-d H:i:s');
$logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
if ($conn->query($logSql) !== TRUE) {
    echo "Error inserting into logs: " . $conn->error;
}

// Close the database connection
$stmt->close();
$mysqli->close();
$conn->close();

echo "Event added Successfully";

// Redirect to admin home page
header('Location: admin-home.php');
exit;
?>
