<?php

include "db_connection.php";

if (isset($_POST["submit"])) {
    // Check if the file was uploaded without errors
    if ($_FILES["csvFile"]["error"] == UPLOAD_ERR_OK) {
        $file = $_FILES["csvFile"]["tmp_name"];

        // Open the CSV file
        if (($handle = fopen($file, "r")) !== FALSE) {
            // Skip the header row
            fgetcsv($handle);

            // Insert data into the database
            while (($row = fgetcsv($handle)) !== FALSE) {
                $id = $row[0];
                $year = $row[1];
                $Abango = $row[2];
                $Amahit = $row[3];
                $Balire = $row[4];

                // Perform the database insertion (adjust the query based on your database structure)
                $sql = "INSERT INTO population_data (id, year, Abango, Amahit, Balire) VALUES ('$id', '$year', '$Abango', '$Amahit', '$Balire')";
                
                if ($conn->query($sql) !== TRUE) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            fclose($handle); // Close the file handle
            echo "File uploaded and data inserted successfully.";
        } else {
            echo "Error opening file.";
        }
    } else {
        echo "Error uploading file.";
    }
}

// Close the database connection
$conn->close();

?>
