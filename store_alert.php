<?php
require 'vendor/autoload.php';

use phpseclib\Net\SFTP;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $alertLevel = $_POST["alert_level"];
    $alertMessage = $_POST["alert_message"];

    // Create an instance of Net_SFTP
    $sftp = new SFTP('edr.topfavlists.com');
    
    // Replace 'your_username' and 'your_password' with your actual SFTP credentials
    if (!$sftp->login('edr', '3fQoT8cgRu')) {
        die('Login Failed');
    }

    // Set the remote directory on the SFTP server
    $remoteDir = '/home/edr/web/edr.topfavlists.com/public_html/uploads/';
    $remoteFile = $remoteDir . basename($_FILES["alert_image"]["name"]);
    $localFile = $_FILES["alert_image"]["tmp_name"];

    // Upload the file to the SFTP server
    if ($sftp->put($remoteFile, $localFile, SFTP::SOURCE_LOCAL_FILE)) {
        // File uploaded successfully, continue processing the form data

        // Additional processing example:
        saveToDatabase($alertLevel, $alertMessage, $remoteFile);

        // Output success message
        echo "Alert submitted successfully!";
    } else {
        echo "Error uploading the file.";
    }
} else {
    echo "Invalid request.";
}

// Function to save data to a database
function saveToDatabase($alertLevel, $alertMessage, $uploadedFilePath) {
    // Connect to your database (replace with your database connection code)
    $mysqli = new mysqli('edr.topfavlists.com', 'edr_usr', 'OufHEDkLws', 'edr_db');

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Escape variables to prevent SQL injection
    $alertLevel = $mysqli->real_escape_string($alertLevel);
    $alertMessage = $mysqli->real_escape_string($alertMessage);
    $uploadedFilePath = $mysqli->real_escape_string($uploadedFilePath);

    // Insert data into the database (replace with your database insert code)
    $query = "INSERT INTO alerts (alert_level, alert_message, image_path, timestamp) VALUES ('$alertLevel', '$alertMessage', '$uploadedFilePath', NOW())";
    $result = $mysqli->query($query);

    // Close the database connection
    $mysqli->close();
}
?>
