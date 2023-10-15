<?php
// Add your database connection logic here
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'disaster_ready';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['event_id'])) {
    $event_id = $_POST['event_id'];
    // Add your logic to edit the event in the database using the provided event_id

    // Example: Update event with $event_id
    $sql = "UPDATE events SET event_name = 'Updated Event' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $event_id);
    $stmt->execute();

    // Check for success or failure
    if ($stmt) {
        echo "Event edited successfully.";
    } else {
        echo "Failed to edit the event.";
    }

    $stmt->close();
}
$conn->close();
?>
