<?php
// Database connection settings
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

// Fetch data from the "evac_centers" table
$sql = "SELECT name, latitude, longitude FROM evac_centers";
$result = $conn->query($sql);

$evac_centers = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $evac_centers[] = [
            'name' => $row['name'],
            'lat' => floatval($row['latitude']),
            'lng' => floatval($row['longitude']),
        ];
    }
}

// Close the database connection
$conn->close();

// Output the data as JSON
header('Content-Type: application/json');
echo json_encode($evac_centers);
?>
