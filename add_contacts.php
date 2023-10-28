<?php
// Establish a database connection (replace with your credentials)
$mysqli = new mysqli('localhost', 'root', '', 'edr_db');

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Retrieve event details from the form
$barangay = $_POST['barangay'];
$first_name = $_POST['firstName'];
$middle_initial = $_POST['middleInitial'];
$last_name = $_POST['lastName'];
$phone_no = $_POST['phoneNo'];

// Insert event data into the "events" table
$query = "INSERT INTO registered_no (barangay, first_name, middle_initial, last_name, phone_no) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

if ($stmt === false) {
    die('Error preparing statement.');
}

$stmt->bind_param('ssssi', $barangay, $first_name, $middle_initial, $last_name, $phone_no);

if ($stmt->execute()) {
    
    header('Location: admin-sms.php');
    $eventAddedSuccessfully = true;
} else {
    $eventAddedSuccessfully = false;
    echo 'Error adding event: ' . $stmt->error;
}

// Close the database connection
$stmt->close();
$mysqli->close();
?>
