<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Get the column name and data from the form
        $columnName = $_POST['columnName'];
        $data = $_POST['data'];

        // Escape inputs to prevent SQL injection
        $columnName = mysqli_real_escape_string($conn, $columnName);

        // Build the UPDATE query for each row
        $updateQuery = "UPDATE population_data SET $columnName = CASE id ";
        $caseStatements = '';

        // Loop through each ID and corresponding data value
        foreach ($_POST['id'] as $key => $id) {
            // Ensure that the ID is an integer to prevent SQL injection
            $id = intval($id);

            // Escape the input to prevent SQL injection
            $dataValue = mysqli_real_escape_string($conn, $data[$key]);

            // Add a CASE statement for each row
            $caseStatements .= "WHEN $id THEN '$dataValue' ";
        }

        // Complete the UPDATE query
        $updateQuery .= $caseStatements . "END WHERE id IN (" . implode(',', $_POST['id']) . ")";

        // Execute the update query
        $result = $conn->query($updateQuery);

        // Check if the update was successful
        if ($result) {
            echo "Records updated successfully";
        } else {
            throw new Exception("Error updating records: " . $conn->error);
        }
    } catch (Exception $e) {
        echo "Caught exception: " . $e->getMessage();
    }
} else {
    // If the request method is not POST, handle it accordingly
    echo "Invalid request method";
}

// Close the database connection
$conn->close();
?>
