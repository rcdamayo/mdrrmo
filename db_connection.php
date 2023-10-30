<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "edr_db";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>

<!-- $mysqli = new mysqli('localhost', 'root', '', 'edr_db');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
} -->