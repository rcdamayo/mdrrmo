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
            $stmt = $conn->prepare("INSERT INTO population_data (
                id, year, Abango, Amahit, Balire, Balud, Bukid, Bulod, Busay, Cabarasan,
                `Cabolo-an`, Calingcaguing, `Can-Isak`, Canomantag, Cuta, Domogdog, Duka,
                Guindaohan, Hiagsam, Hilaba, Hinugayan, Ibag, Minuhang, Minuswang, Pikas,
                Pitogo, `Poblacion Dist I`, `Poblacion Dist II`, `Poblacion Dist III`,
                `Poblacion Dist IV`, `Poblacion Dist V`, `Poblacion Dist VI`, Pongso, Roosevelt,
                `San Isidro`, `San Roque`, `Santa Rosa`, Santarin, `Tutug-an`
            ) VALUES (
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
            )");

            // Bind parameters
            $stmt->bind_param("isiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii", $id, $year, $Abango, $Amahit, $Balire, $Balud, $Bukid, $Bulod, $Busay, $Cabarasan,
                $Cabolo_an, $Calingcaguing, $Can_Isak, $Canomantag, $Cuta, $Domogdog, $Duka,
                $Guindaohan, $Hiagsam, $Hilaba, $Hinugayan, $Ibag, $Minuhang, $Minuswang, $Pikas,
                $Pitogo, $Poblacion_Dist_I, $Poblacion_Dist_II, $Poblacion_Dist_III,
                $Poblacion_Dist_IV, $Poblacion_Dist_V, $Poblacion_Dist_VI, $Pongso, $Roosevelt,
                $San_Isidro, $San_Roque, $Santa_Rosa, $Santarin, $Tutug_an);

            while (($row = fgetcsv($handle)) !== FALSE) {
                // Convert numeric values to integers
                list($id, $year, $Abango, $Amahit, $Balire, $Balud, $Bukid, $Bulod, $Busay, $Cabarasan,
                    $Cabolo_an, $Calingcaguing, $Can_Isak, $Canomantag, $Cuta, $Domogdog, $Duka,
                    $Guindaohan, $Hiagsam, $Hilaba, $Hinugayan, $Ibag, $Minuhang, $Minuswang, $Pikas,
                    $Pitogo, $Poblacion_Dist_I, $Poblacion_Dist_II, $Poblacion_Dist_III,
                    $Poblacion_Dist_IV, $Poblacion_Dist_V, $Poblacion_Dist_VI, $Pongso, $Roosevelt,
                    $San_Isidro, $San_Roque, $Santa_Rosa, $Santarin, $Tutug_an) = $row;

                if (!$stmt->execute()) {
                    echo "Error: " . $stmt->error;
                }
            }

            fclose($handle); // Close the file handle
            echo "File uploaded and data inserted successfully.";
            header("Location: admin-population.php");
        } else {
            echo "Error opening file.";
            header("Location: index.php");
        }
    } else {
        echo "Error uploading file.";
        header("Location: index.php");
    }
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>
