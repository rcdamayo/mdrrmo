<?php
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

// Twilio credentials
$accountSid = 'AC176320e249b62519180d00d31ce8f300';
$authToken  = '2586af1a77a3a433cf90d79a0868659f';
$twilioPhoneNumber = '+16562187651';

// Initialize Twilio client
$client = new Client($accountSid, $authToken);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phoneNumbers = explode(',', $_POST['phoneNumbers']);
    $message = $_POST['message'];

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
            echo "Message sent to $phoneNumber successfully.\n";
        } catch (Exception $e) {
            echo "Error sending message to $phoneNumber: {$e->getMessage()}\n";
        }
    }
} else {
    echo "Invalid request method.";
}
