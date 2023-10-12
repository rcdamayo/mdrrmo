<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $barangay = $_POST['barangay'];
    $status = $_POST['status'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "disaster_ready";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE brgys_prone_to_flood SET barangay = '$barangay', status = '$status' WHERE id = $id";

    if ($conn->query($sql) === true) {
        echo "success";
    } else {
        echo "error";
    }

    $conn->close();
}
?>
