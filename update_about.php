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
    if (isset($_POST['id']) && isset($_POST['employee_name']) && isset($_POST['position']) && isset($_POST['position2'])) {
        $ids = $_POST['id'];
        $employees = $_POST['employee_name'];
        $positions = $_POST['position'];
        $positions2 = $_POST['position2'];

        for ($i = 0; $i < count($ids); $i++) {
            $id = $conn->real_escape_string($ids[$i]);
            $employee = $conn->real_escape_string($employees[$i]);
            $position = $conn->real_escape_string($positions[$i]);
            $position2 = $conn->real_escape_string($positions2[$i]);

            $sql = "UPDATE org_chart SET employee_name='$employee', position='$position', position2='$position2' WHERE id='$id'";
            if ($conn->query($sql) !== TRUE) {
                echo "Error updating record: " . $conn->error;
                break;
            }
        }

        echo "Organizational Chart Updated Successfully";
    }
}

$conn->close();
?>
