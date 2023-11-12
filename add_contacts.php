<?php

include 'db_connection2.php';

// Retrieve event details from the form
$barangay = $_POST['barangay'];
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$email = $_POST['email'];
$phone_no = $_POST['phoneNo'];

// Insert event data into the "events" table
$query = "INSERT INTO residents (barangay, first_name, last_name, email, phone_no, verified) VALUES (?, ?, ?, ?, ?, 'n')";
$stmt = $mysqli->prepare($query);

if ($stmt === false) {
    die('Error preparing statement.');
}

$stmt->bind_param('ssssi', $barangay, $first_name, $last_name, $email, $phone_no);

if ($stmt->execute()) {

    header('Location: admin-contact.php');
    $eventAddedSuccessfully = true;
} else {
    $eventAddedSuccessfully = false;
    echo 'Error adding event: ' . $stmt->error;
}

// Close the database connection
$stmt->close();
$mysqli->close();
?>
