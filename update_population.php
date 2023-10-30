<?php
include 'db_connection.php';

// Update the data in the database
$success = true; // Flag to track if the update was successful

if (isset($_POST['population_2015']) && isset($_POST['population_2020']) && isset($_POST['population_change']) && isset($_POST['rate'])) {
    $pop2015 = $_POST['population_2015'];
    $pop2020 = $_POST['population_2020'];
    $pop_change = $_POST['population_change'];
    $rates = $_POST['rate'];

    for ($i = 0; $i < count($pop2015); $i++) {
        $population_2015 = $conn->real_escape_string($pop2015[$i]);
        $population_2020 = $conn->real_escape_string($pop2020[$i]);
        $population_change = $conn->real_escape_string($pop_change[$i]);
        $rate = $conn->real_escape_string($rates[$i]);
        $id = $i + 1; // Assuming the id starts from 1 and increments by 1 for each row

        $sql = "UPDATE population_data SET population_2015='$population_2015', population_2020='$population_2020', population_change='$population_change', rate='$rate' WHERE id='$id'";

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