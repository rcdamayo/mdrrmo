<?php
include 'admin_db_connection.php';
include 'db_connection2.php';
include 'db_connection.php';

session_start();

// Retrieve event details from the form
$barangay = $_POST['barangay'];
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$phone_no = $_POST['phoneNo'];

// Insert event data into the "events" table
$query = "INSERT INTO residents (barangay, first_name, last_name, phone_no) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

if ($stmt === false) {
    die('Error preparing statement.');
}

$stmt->bind_param('sssi', $barangay, $first_name, $last_name, $phone_no);

if ($stmt->execute()) {

    header('Location: admin-contact.php');
    $eventAddedSuccessfully = true;
} else {
    $eventAddedSuccessfully = false;
    echo 'Error adding event: ' . $stmt->error;
}

// Retrieve the currently logged-in employee_id
$currentEmployeeId = $_SESSION['employee_id'];

// Insert into logs table with the currently logged-in employee_id
$section = "Contact";
$description = "Added a Contact";
$date_time = date('Y-m-d H:i:s');
$logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
if ($conn->query($logSql) !== TRUE) {
    echo "Error inserting into logs: " . $conn->error;
}

// Close the database connection
$stmt->close();
$mysqli->close();
$conn->close();
?>
