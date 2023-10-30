<?php
// Check if the year, month, and day parameters are set
if (isset($_GET['year']) && isset($_GET['month']) && isset($_GET['day'])) {
    $year = $_GET['year'];
    $month = $_GET['month'];
    $day = $_GET['day'];

    // Validate and sanitize the input (you should use prepared statements for database queries)
    $year = filter_var($year, FILTER_VALIDATE_INT);
    $month = filter_var($month, FILTER_VALIDATE_INT);
    $day = filter_var($day, FILTER_VALIDATE_INT);

    if ($year === false || $month === false || $day === false) {
        // Handle invalid input
        echo 'Invalid date parameters';
        exit;
    }

    // You can connect to your database here (e.g., MySQL)
    include 'db_connection.php';

    // Assuming you have an "events" table with columns: id, event_date, event_name, event_description
    $eventDate = "$year-$month-$day"; // Create a date string in YYYY-MM-DD format

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['event_name']) && isset($_POST['event_description'])) {
        $eventTitle = $_POST['event_name'];
        $eventDescription = $_POST['event_description'];
        
        // You should use prepared statements to prevent SQL injection
        $sql = "INSERT INTO events (event_date, event_name, event_description) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $eventDate, $eventTitle, $eventDescription);

        if ($stmt->execute()) {
            // Event added successfully
            echo 'Event added successfully.';
        } else {
            // Handle database insertion error
            echo 'Error adding event: ' . $conn->error;
        }

        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Page</title>
</head>
<body>
    <h2>Create Event for <?php echo "$year-$month-$day"; ?></h2>
    <form method="post">
        <label for="event_name">Event Title:</label>
        <input type="text" id="event_name" name="event_name" required>
        <br>
        <label for="event_description">Event Description:</label>
        <textarea id="event_description" name="event_description" required></textarea>
        <br>
        <input type="submit" value="Add Event">
    </form>
</body>
</html>