<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "edr_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Save message to the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $message = $_POST["message"];

    // Use the CURRENT_TIMESTAMP for the time_sent column
    $sql = "INSERT INTO chats (user, message, time_sent) VALUES ('$user', '$message', CURRENT_TIMESTAMP)";
    $conn->query($sql);
}

// Retrieve messages from the database within the last 6 hours
$result = $conn->query("SELECT * FROM chats WHERE time_sent >= NOW() - INTERVAL 2 HOUR");
$chats = [];
while ($row = $result->fetch_assoc()) {
    $chats[] = $row;
}

$conn->close();

// Return messages as JSON
header('Content-Type: application/json');
echo json_encode($chats);
?>
