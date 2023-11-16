<?php
include 'db_connection2.php';

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

    // Include admin database connection and start session
    include 'admin_db_connection.php';
    include 'db_connection.php';
    session_start();

    // Get the currently logged-in employee ID
    $currentEmployeeId = $_SESSION['employee_id'];

    // Insert into logs table with the currently logged-in employee_id
    $section = "Home/Events";
    $description = "Removed an Event";
    $date_time = date('Y-m-d H:i:s');
    $logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
    
    if ($conn->query($logSql) !== TRUE) {
        echo "Error inserting into logs: " . $conn->error;
    }

    echo "Event Removed Successfully";
} else {
    echo 'Event ID not provided.';
}

header('Location: admin-home.php');
exit;
?>
