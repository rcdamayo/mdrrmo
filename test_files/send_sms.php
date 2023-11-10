<?php

require __DIR__ . '/../vendor/autoload.php';

use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC176320e249b62519180d00d31ce8f300';
$auth_token = '2586af1a77a3a433cf90d79a0868659f';
$twilio_number = '+16562187651';
$client = new Client($account_sid, $auth_token);

// List of numbers to send SMS to
$numbers = ["+639613851427"]; // Add your numbers here

$message = "This is a test message!";
$error = false;

foreach ($numbers as $number) {
    try {
        $client->messages->create(
            $number,
            array(
                'from' => $twilio_number,
                'body' => $message
            )
        );
        echo "Message sent to $number";
    } catch (Exception $e) {
        $error = true;
        echo 'Message could not be sent to ' . $number . ' Error: ' . $e->getMessage();
    }
}

if (!$error) {
    echo "All messages sent successfully.";
}
?>
