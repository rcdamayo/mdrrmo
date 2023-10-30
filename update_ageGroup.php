<?php
// Connect to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "edr_db";

$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update the data in the database
$success = true; // Flag to track if the update was successful

if (isset($_POST['population_2015']) && isset($_POST['age_percentage'])) {
    $pop2015 = $_POST['population_2015'];
    $agePercent = $_POST['age_percentage'];

    for ($i = 0; $i < count($pop2015); $i++) {
        $population_2015 = $conn->real_escape_string($pop2015[$i]);
        $age_percentage = $conn->real_escape_string($agePercent[$i]);
        $id = $i + 1; // Assuming the id starts from 1 and increments by 1 for each row

        $sql = "UPDATE age_group SET population_2015='$population_2015', age_percentage='$age_percentage' WHERE id='$id'";

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