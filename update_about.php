<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

$currentEmployeeId = $_SESSION['employee_id'];

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
        // Insert into logs table with the currently logged-in employee_id
            $section = "About";
            $description = "Updated About";
            $date_time = date('Y-m-d H:i:s');
            $logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
            if ($conn->query($logSql) !== TRUE) {
                echo "Error inserting into logs: " . $conn->error;
            }

        echo "Organizational Chart Updated Successfully";
    }
}

$conn->close();
?>
