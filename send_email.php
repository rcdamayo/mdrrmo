<?php
// Include the Composer autoload file or the PHPMailer file, depending on your setup
require 'vendor/autoload.php'; // or the path to PHPMailer if not using Composer

use PHPMailer\PHPMailer\PHPMailer;

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
$sql = "SELECT email FROM residents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.sendgrid.net'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'apikey'; // SMTP username
    $mail->Password = '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'; // SMTP password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587; // TCP port to connect to

    try {
        while ($row = $result->fetch_assoc()) {
            $to_email = $row["email"];
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
} else {
    echo "No results found";
}

// Close the database connection
$conn->close();
?>
