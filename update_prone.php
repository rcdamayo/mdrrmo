<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

// Retrieve the currently logged-in employee_id
$currentEmployeeId = $_SESSION['employee_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update existing records
    if (isset($_POST['id']) && isset($_POST['barangay']) && isset($_POST['status'])) {
        $ids = $_POST['id'];
        $barangays = $_POST['barangay'];
        $statuses = $_POST['status'];

        for ($i = 0; $i < count($ids); $i++) {
            $id = $ids[$i];
            $barangay = $conn->real_escape_string($barangays[$i]);
            $status = $conn->real_escape_string($statuses[$i]);

            if (empty($barangay) && !empty($status)) {
                $sql = "UPDATE brgys_prone_to_flood SET barangay='$barangay', status='$status' WHERE id='$id'";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error deleting record: " . $conn->error;
                    break;
                }
            } elseif (!empty($barangay) && !empty($status)) {
                $sql = "UPDATE brgys_prone_to_flood SET barangay='$barangay', status='$status' WHERE id='$id'";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error updating record: " . $conn->error;
                    break;
                }
            } elseif (empty($barangay) && empty($status)) {
                $sql = "DELETE FROM brgys_prone_to_flood WHERE id='$id'";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error updating record: " . $conn->error;
                    break;
                }
            }
        }

        // Log the update
        $section = "Flood";
        $description = "Updated Barangays Prone to Flood";
        $date_time = date('Y-m-d H:i:s');
        $logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
        if ($conn->query($logSql) !== TRUE) {
            echo "Error inserting into logs: " . $conn->error;
        }

    }

    // Insert new rows
    if (isset($_POST['new_barangay']) && isset($_POST['new_status'])) {
        $newBarangays = $_POST['new_barangay'];
        $newStatuses = $_POST['new_status'];

        for ($i = 0; $i < count($newBarangays); $i++) {
            $newBarangay = $conn->real_escape_string($newBarangays[$i]);
            $newStatus = $conn->real_escape_string($newStatuses[$i]);

            if (!empty($newBarangay) && !empty($newStatus)) {
                $sql = "INSERT INTO brgys_prone_to_flood (barangay, status) VALUES ('$newBarangay', '$newStatus')";
                if ($conn->query($sql) !== TRUE) {
                    echo "Error inserting new record: " . $conn->error;
                    break;
                }

                // Log the insertion
                $section = "Flood";
                $description = "Inserted new Barangay Prone to Flood";
                $date_time = date('Y-m-d H:i:s');
                $logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
                if ($conn->query($logSql) !== TRUE) {
                    echo "Error inserting into logs: " . $conn->error;
                }
            }
        }
    }

    echo "Records updated and inserted successfully";
}
$conn->close();
?>
