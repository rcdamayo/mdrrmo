<?php
include 'db_connection.php';

// Update the data in the database
$success = true; // Flag to track if the update was successful

if (isset($_POST['verified'])) {
    $verification = $_POST['verified'];
    $idArray = $_POST['id']; // Assuming the 'id' field is passed through the form

    for ($i = 0; $i < count($verification); $i++) {
        $verified = $conn->real_escape_string($verification[$i]);
        $id = $conn->real_escape_string($idArray[$i]);

        $sql = "UPDATE residents SET verified='$verified' WHERE id='$id'";

        if ($conn->query($sql) !== true) {
            $success = false;
            break;
        }
    }
}

if ($success) {
    echo "Records updated successfully";
} else {
    echo "Error updating records";
}

$conn->close();
?>
