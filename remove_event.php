<?php
// Establish a database connection (replace with your credentials)
$mysqli = new mysqli('localhost', 'root', '', 'disaster_ready');

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Retrieve event ID from the form
$event_id = $_POST['eventId'];

if ($event_id) {
    // Delete the event from the "events" table
    $query = "DELETE FROM events WHERE id = ?";
    $stmt = $mysqli->prepare($query);

    if ($stmt === false) {
        die('Error preparing statement.');
    }

    $stmt->bind_param('i', $event_id);

    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $mysqli->close();
} else {
    echo 'Event ID not provided.';
}

header('Location: admin-home.php');
exit;
?>
