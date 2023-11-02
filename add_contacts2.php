<?php

include 'db_connection2.php';

// Retrieve event details from the form
$barangay = $_POST['barangay'];
$first_name = $_POST['firstName'];
$middle_initial = $_POST['middleInitial'];
$last_name = $_POST['lastName'];
$phone_no = $_POST['phoneNo'];

// Insert event data into the "events" table
$query = "INSERT INTO residents (barangay, first_name, middle_initial, last_name, phone_no) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

if ($stmt === false) {
    die('Error preparing statement.');
}

$stmt->bind_param('ssssi', $barangay, $first_name, $middle_initial, $last_name, $phone_no);

if ($stmt->execute()) {
    
    header('Location: index.php');
    $eventAddedSuccessfully = true;
} else {
    $eventAddedSuccessfully = false;
    echo 'Error adding event: ' . $stmt->error;
}

// Close the database connection
$stmt->close();
$mysqli->close();
?>
