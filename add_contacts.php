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

// Check if the phone number already exists in the 'residents' table
$checkSql = "SELECT * FROM residents WHERE phone_no = ?";
$checkStmt = $mysqli->prepare($checkSql);

if ($checkStmt === false) {
    die('Error preparing check statement.');
}

$checkStmt->bind_param('i', $phone_no);
$checkStmt->execute();
$checkStmt->store_result();

if ($checkStmt->num_rows > 0) {
    // If the phone number exists, update the existing row with the new first_name, last_name, and barangay
    $updateSql = "UPDATE residents SET first_name = ?, last_name = ?, barangay = ? WHERE phone_no = ?";
    $updateStmt = $mysqli->prepare($updateSql);

    if ($updateStmt === false) {
        die('Error preparing update statement.');
    }

    $updateStmt->bind_param('sssi', $first_name, $last_name, $barangay, $phone_no);

    if ($updateStmt->execute()) {
        header('Location: admin-contact.php');
        $contactAddedSuccessfully = true;
    } else {
        $contactAddedSuccessfully = false;
        echo 'Error updating contact: ' . $updateStmt->error;
    }

    $updateStmt->close();
} else {
    // If the phone number does not exist, insert a new row
    $insertSql = "INSERT INTO residents (barangay, first_name, last_name, phone_no) VALUES (?, ?, ?, ?)";
    $insertStmt = $mysqli->prepare($insertSql);

    if ($insertStmt === false) {
        die('Error preparing insert statement.');
    }

    $insertStmt->bind_param('sssi', $barangay, $first_name, $last_name, $phone_no);

    if ($insertStmt->execute()) {
        header('Location: admin-contact.php');
        $contactAddedSuccessfully = true;
    } else {
        $contactAddedSuccessfully = false;
        echo 'Error adding contact: ' . $insertStmt->error;
    }

    $insertStmt->close();
}

// Retrieve the currently logged-in employee_id
$currentEmployeeId = $_SESSION['employee_id'];

// Insert into logs table with the currently logged-in employee_id
$section = "Contact";
$description = ($contactAddedSuccessfully) ? "Added a Contact" : "Error adding or updating contact";
$date_time = date('Y-m-d H:i:s');
$logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES (?, ?, ?, ?)";
$logStmt = $conn->prepare($logSql);

if ($logStmt === false) {
    die('Error preparing log statement.');
}

$logStmt->bind_param('sssi', $section, $description, $date_time, $currentEmployeeId);

if ($logStmt->execute() !== TRUE) {
    echo "Error inserting into logs: " . $logStmt->error;
}

// Close the database connections
$checkStmt->close();
$logStmt->close();
$mysqli->close();
$conn->close();
?>
