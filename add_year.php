<?php
include "db_connection.php";

// Get the year value from the POST request
$yearValue = $_POST['yearValue'];

// Perform the database update
$sql = "INSERT INTO population_data (year) VALUES ('$yearValue')";

if ($conn->query($sql) === TRUE) {
    $response = array("success" => true);
} else {
    $response = array("success" => false);
}

// Close the database connection
$conn->close();

// Send the response back to the client
header('Content-Type: application/json');
echo json_encode($response);
?>
