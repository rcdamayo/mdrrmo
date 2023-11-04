<?php
// Include the Composer autoload file or the PHPMailer file, depending on your setup
require 'vendor/autoload.php'; // or the path to PHPMailer if not using Composer

use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch email addresses from the residents table
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "edr_db";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $emailList = $_POST['email']; // List of email addresses separated by commas or semicolons
    $emails = explode(',', $emailList); // Separate the email addresses into an array

    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.mailgun.org'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'postmaster@sandboxb341a6c17d2642a7aca021df8f197fa3.mailgun.org'; // SMTP username
    $mail->Password = '002b2fc37e1a9d45ca2d1e02de543454-3e508ae1-afbf7183'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    try {
        foreach ($emails as $to_email) {
            $mail->setFrom('damayo714@gmail.com', 'MDRRMO Barugo'); // Replace with your email and name
            $mail->addAddress($to_email); // Add a recipient

            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
            echo "Email successfully sent to $to_email<br>";
            $mail->clearAddresses(); // Clear all addresses for the next iteration
        }
    } catch (Exception $e) {
        echo "Email sending failed. Error: {$mail->ErrorInfo}";
    }

    // Close the database connection
    $conn->close();
} else {
    echo "Invalid request";
}
?>
