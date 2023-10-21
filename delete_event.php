<?php
if (isset($_POST['event_id'])) {
    // Establish a database connection (similar to add_event.php)

    $event_id = $_POST['event_id'];

    // Prepare and execute the deletion query
    $query = "DELETE FROM events WHERE id = ?";
    $stmt = $conn->prepare($query);

    if ($stmt === false) {
        die('Error preparing statement.');
    }

    $stmt->bind_param('i', $event_id);

    if ($stmt->execute()) {
        // Redirect to the same page or any other page after successful deletion
        header('Location: admin-home.php');
        exit;
    } else {
        echo 'Error deleting event: ' . $stmt->error;
    }

    // Close the statement
    $stmt->close();
    $conn->close();
}
?>
