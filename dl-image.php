<?php
require 'vendor/autoload.php';

use phpseclib\Net\SFTP;

include "db_connection.php";

if (isset($_GET['file'])) {
    $remoteFilePath = $_GET['file'];

    // Download the image
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($remoteFilePath) . '"');

    $sftp = new SFTP('your_sftp_server');
    if (!$sftp->login('edr', '3fQoT8cgRu')) {
        exit('Login Failed');
    }

    // Download the file
    echo $sftp->get($remoteFilePath);
    
    // Close the SFTP connection
    $sftp->disconnect();

    exit();
}
?>
