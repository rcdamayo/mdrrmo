<?php
include 'db_connection.php';

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

// Close the database connection
$stmt->close();
$mysqli->close();

header('Location: admin-home.php');
exit;
?>
