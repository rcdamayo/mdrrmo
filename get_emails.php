<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "edr_db"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all email addresses from the database
$sql = "SELECT email FROM registered_emails";
$result = $conn->query($sql);

$emails = array();

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        array_push($emails, $row["email"]);
    }
} else {
    echo "0 results";
}

$conn->close();

// Return the emails as JSON
header('Content-Type: application/json');
echo json_encode($emails);
?>
