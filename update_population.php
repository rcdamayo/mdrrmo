<?php
include 'db_connection.php';

// Check if the database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success = true; // Flag to track if the update was successful

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have sanitized your input data properly to prevent SQL injection
    $postData = $_POST;

    // Loop through the posted data to update the database
    foreach ($postData['id'] as $index => $id) {
        $originalYear = $postData['original_years'][$index];
        $year = $postData['years'][$index];

        // Add more columns as needed
        $Abango = $conn->real_escape_string($postData['Abango'][$index]);
        $Amahit = $conn->real_escape_string($postData['Amahit'][$index]);
        $Balire = $conn->real_escape_string($postData['Balire'][$index]);

        // Update the corresponding row in the database
        $updateSql = "UPDATE population_data SET 
            year='$year', 
            Abango='$Abango', 
            Amahit='$Amahit', 
            Balire='$Balire'
            WHERE id=$id AND year='$originalYear'";

        if (!$conn->query($updateSql)) {
            $success = false;
            echo "Error updating record: " . $conn->error;
            break;
        }
    }

} else {
    $success = false;
    echo "Invalid request method";
}

if ($success) {
    echo "Records updated successfully";
} else {
    echo "Error updating records";
}

$conn->close();
?>
