<?php
include 'db_connection.php';

// Query the database to fetch the data
$sql = "SELECT * FROM population_data";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    // Fetch data from the result set
    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            "year" => $row["year"],
            "abango" => intval($row["abango"]),
            "amahit" => intval($row["amahit"])
        );
    }
}

// Close the database connection
$conn->close();

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
