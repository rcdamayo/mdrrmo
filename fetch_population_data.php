<?php

include "db_connection.php"; // Assuming this file contains your database connection details

// Check if a specific year is requested
$selectedYear = isset($_GET['year']) ? $_GET['year'] : null;

// Query to retrieve data from the database, filter by the selected year if provided
$sql = "SELECT * FROM population_data" . ($selectedYear ? " WHERE year = '$selectedYear'" : '');

$result = $conn->query($sql);

if ($result) {
    $data = array();

    while ($row = $result->fetch_assoc()) {
        // Add each row to the $data array
        $data[] = $row;
    }

    // Return data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    echo "Error executing query: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
