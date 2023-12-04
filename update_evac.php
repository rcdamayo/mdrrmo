<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update existing records
    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['latitude']) && isset($_POST['longitude'])) {
        $ids = $_POST['id'];
        $names = $_POST['name'];
        $latitudes = $_POST['latitude'];
        $longitudes = $_POST['longitude'];
        $capacities = $_POST['capacity'];

        for ($i = 0; $i < count($ids); $i++) {
            $id = $ids[$i];
            $name = $conn->real_escape_string($names[$i]);
            $latitude = $conn->real_escape_string($latitudes[$i]);
            $longitude = $conn->real_escape_string($longitudes[$i]);
            $capacity = $conn->real_escape_string($capacities[$i]);

            if (!empty($name) && !empty($latitude) && !empty($longitude)) {
                $sql = "UPDATE evac_centers SET name='$name', latitude='$latitude', longitude='$longitude', capacity='$capacity' WHERE id='$id'";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error deleting record: " . $conn->error;
                    break;
                }
            } elseif (empty($name) || empty($latitude) || empty($longitude)) {
                $sql = "DELETE FROM evac_centers WHERE id='$id'";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error updating record: " . $conn->error;
                    break;
                }
            }
        }

    // Insert new rows
    if (isset($_POST['new_name']) && isset($_POST['new_latitude']) && isset($_POST['new_longitude'])) {
        $newNames = $_POST['new_name'];
        $newLatitudes = $_POST['new_latitude'];
        $newLongitudes = $_POST['new_longitude'];
        $newCapacities = $_POST['new_capacity'];

        for ($i = 0; $i < count($newNames); $i++) {
            $newName = $conn->real_escape_string($newNames[$i]);
            $newLatitude = $conn->real_escape_string($newLatitudes[$i]);
            $newLongitude = $conn->real_escape_string($newLongitudes[$i]);
            $newCapacity = $conn->real_escape_string($newCapacities[$i]);

            if (!empty($newNames) && !empty($newLatitudes) && !empty($newLongitudes)) {
                $sql = "INSERT INTO evac_centers (name, latitude, longitude, capacity) VALUES ('$newName', '$newLatitude', '$newLongitude', '$newCapacity')";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error inserting new record: " . $conn->error;
                    break;
                }
            }
        }
    }

    // Retrieve the currently logged-in employee_id
    $currentEmployeeId = $_SESSION['employee_id'];

    // Insert into logs table with the currently logged-in employee_id
    $section = "Map";
    $description = "Updated Evacuation Centers";
    $date_time = date('Y-m-d H:i:s');
    $logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
    if ($conn->query($logSql) !== TRUE) {
        echo "Error inserting into logs: " . $conn->error;
    }

    echo "Evacuation Centers updated and inserted successfully";
}
}
$conn->close();
?>
