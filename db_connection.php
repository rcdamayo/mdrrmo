<?php
    $servername = "edr.topfavlists.com";
    $username = "edr_usr";
    $password = "OufHEDkLws";
    $database = "edr_db";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>