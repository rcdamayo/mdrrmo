<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

// Twilio credentials
$accountSid = 'AC176320e249b62519180d00d31ce8f300';
$authToken  = '2586af1a77a3a433cf90d79a0868659f';
$twilioPhoneNumber = '+16562187651';

// Initialize Twilio client
$client = new Client($accountSid, $authToken);

include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumbers = explode(',', $_POST['phoneNumbers']);
    $message = $_POST['message'];

    // Preserve line breaks and spacing in the message
    $message = nl2br($message);

    foreach ($phoneNumbers as $phoneNumber) {
        try {
            // Send message
            $client->messages->create(
                $phoneNumber,
                [
                    'from' => $twilioPhoneNumber,
                    'body' => $message,
                ]
            );
            $success = true;
        } catch (Exception $e) {
            $success = false;
            echo "Error sending message to $phoneNumber: {$e->getMessage()}\n";
        }
    }

    // Display an alert message based on success
    if ($success) {
        header("Location: admin-contact.php");
        exit;
    } else {
        header("Location: admin-contact.php");
        exit;
    }

    // Retrieve the currently logged-in employee_id
    $currentEmployeeId = $_SESSION['employee_id'];

    // Insert into logs table with the currently logged-in employee_id
    $section = "Contact";
    $description = "Sent a message";
    $date_time = date('Y-m-d H:i:s');
    $logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
    
    if ($conn->query($logSql) !== TRUE) {
        echo "Error inserting into logs: " . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Redirect to admin-contact.php
    header("Location: admin-contact.php");
    exit;
} else {
    echo "Invalid request method.";
}
?>
