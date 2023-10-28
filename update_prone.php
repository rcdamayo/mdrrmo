<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "edr_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
            }
        }
    }

    echo "Records updated and inserted successfully";
}
}
$conn->close();
?>
