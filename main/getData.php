<?php
// getData.php
if (isset($_GET['tableName'])) {
    $tableName = $_GET['tableName'];

    // Establish a database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "water_level";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn) {
        $data = [];

        // Assuming table structure: year, january, february, ..., december
        $sql = "SELECT * FROM $tableName";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $year = $row['year'];
                $monthlyData = array_slice($row, 1); // Remove 'year' column
                $data[$year] = array_values($monthlyData); // Store data for the year
            }
        }

        // Close the database connection
        mysqli_close($conn);

        // Output the data as JSON
        echo json_encode($data);
    }
}
?>
