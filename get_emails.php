<?php
include "db_connection.php";

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
