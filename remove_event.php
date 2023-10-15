<?php
// Remove event logic
if (isset($_GET['id'])) {
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'disaster_ready';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $eventId = $_GET['id'];

    // SQL to delete the event with the specified id
    $sql = "DELETE FROM events WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eventId);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    // Return success message
    echo "Event removed successfully.";
} else {
    echo "Invalid request. Please provide an event ID.";
}
?>
