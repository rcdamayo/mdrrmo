<?php

include "db_connection.php"; // Assuming this file contains your database connection details

// Check if a specific year is requested
$selectedYear = isset($_GET['year']) ? $_GET['year'] : null;

// Prepare the SQL query
$sql = "SELECT * FROM population_data" . ($selectedYear ? " WHERE year = ?" : '');

// Use a prepared statement to avoid SQL injection
$stmt = $conn->prepare($sql);

if ($selectedYear) {
    // Bind the parameter for the selected year
    $stmt->bind_param('s', $selectedYear);
}

// Execute the statement
$result = $stmt->execute();

if ($result) {
    $data = array();

    // Get the result set
    $resultSet = $stmt->get_result();

    while ($row = $resultSet->fetch_assoc()) {
        // Add each row to the $data array
        $data[] = $row;
    }

    // Return data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    echo "Error executing query: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
