<?php
require 'vendor/autoload.php';

use phpseclib\Net\SFTP;

include "db_connection.php";

$sql = "SELECT * FROM alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR AND image_path IS NOT NULL ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (!empty($row["image_path"]) && !empty($row["timestamp"])) {
            // Create an instance of Net_SFTP
            $sftp = new SFTP('edr.topfavlists.com');
            
            // Replace 'your_username' and 'your_password' with your actual SFTP credentials
            if (!$sftp->login('edr', '3fQoT8cgRu')) {
                die('Login Failed');
            }

            // Set the remote file path on the SFTP server
            $remoteFilePath = $row["image_path"];
            
            // Set the local directory where you want to save the downloaded image
            $localDirPath = 'c:/Users/Windows/Downloads'; // Provide an appropriate local path

            // Check if the local directory exists, if not, create it
            if (!file_exists($localDirPath) && !is_dir($localDirPath)) {
                mkdir($localDirPath, 0777, true);
            }

            // Set the local file path
            $localFilePath = $localDirPath . '/' . basename($remoteFilePath);

            // Download the image from the SFTP server
            if ($sftp->get($remoteFilePath, $localFilePath)) {
                // Check if the file was successfully downloaded
                if (file_exists($localFilePath)) {
                    // Display the image
                    echo '<img src="' . $remoteFilePath . '" onclick="openModal()">';
                } else {
                    echo 'Error: Local file not found after download.';
                }
            } else {
                echo 'Error downloading the image from the SFTP server. SFTP Error: ' . $sftp->getLastSFTPError();
            }
        }
    }
}

$conn->close();
?>