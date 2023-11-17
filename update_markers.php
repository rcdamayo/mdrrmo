<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

// Update the data in the database
$success = true; // Flag to track if the update was successful

if (isset($_POST['level']) && isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['display_marker'])) {
    $levels = $_POST['level'];
    $latitudes = $_POST['latitude'];
    $longitudes = $_POST['longitude'];
    $displayMarkers = $_POST['display_marker'];

    for ($i = 0; $i < count($levels); $i++) {
        $level = $conn->real_escape_string($levels[$i]);
        $latitude = $conn->real_escape_string($latitudes[$i]);
        $longitude = $conn->real_escape_string($longitudes[$i]);
        $displayMarker = $conn->real_escape_string($displayMarkers[$i]);
        $id = $i + 1; // Assuming the id starts from 1 and increments by 1 for each row

        $sql = "UPDATE map_markers SET level='$level', latitude='$latitude', longitude='$longitude', display_marker='$displayMarker' WHERE id='$id'";

        if ($conn->query($sql) !== true) {
            $success = false;
            break;
        }
    }

    // Retrieve the currently logged-in employee_id
    $currentEmployeeId = $_SESSION['employee_id'];

    // Insert into logs table with the currently logged-in employee_id
    $section = "Flood";
    $description = "Updated Markers";
    $date_time = date('Y-m-d H:i:s');
    $logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
    if ($conn->query($logSql) !== TRUE) {
        echo "Error inserting into logs: " . $conn->error;
    }

}

if ($success) {
    echo "Records updated successfully";
} else {
    echo "Error updating records";
}

$conn->close();
?>
