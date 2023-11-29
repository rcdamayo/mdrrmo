<?php
include 'db_connection.php';

// Check if the database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$success = true; // Flag to track if the update was successful

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have sanitized your input data properly to prevent SQL injection
    $postData = $_POST;

    // Loop through the posted data to update the database
    foreach ($postData['years'] as $index => $year) {
        $originalYear = $postData['original_years'][$index];

        // Update the corresponding row in the database
        $updateSql = "UPDATE population_data SET 
            year='$year', 
            Abango='{$postData['Abango'][$index]}', 
            Amahit='{$postData['Amahit'][$index]}', 
            Balire='{$postData['Balire'][$index]}',
            Balud='{$postData['Balud'][$index]}',
            Bukid='{$postData['Bukid'][$index]}',
            Bulod='{$postData['Bulod'][$index]}',
            Busay='{$postData['Busay'][$index]}',
            Cabarasan='{$postData['Cabarasan'][$index]}',
            `Cabolo-an`='{$postData['Cabolo-an'][$index]}',
            Calingcaguing='{$postData['Calingcaguing'][$index]}',
            `Can-Isak`='{$postData['Can-Isak'][$index]}',
            Canomantag='{$postData['Canomantag'][$index]}',
            Cuta='{$postData['Cuta'][$index]}',
            Domogdog='{$postData['Domogdog'][$index]}',
            Duka='{$postData['Duka'][$index]}',
            Guindaohan='{$postData['Guindaohan'][$index]}',
            Hiagsam='{$postData['Hiagsam'][$index]}',
            Hilaba='{$postData['Hilaba'][$index]}',
            Hinugayan='{$postData['Hinugayan'][$index]}',
            Ibag='{$postData['Ibag'][$index]}',
            Minuhang='{$postData['Minuhang'][$index]}',
            Minuswang='{$postData['Minuswang'][$index]}',
            Pikas='{$postData['Pikas'][$index]}',
            Pitogo='{$postData['Pitogo'][$index]}',
            `Poblacion Dist I`='{$postData['Poblacion_Dist_I'][$index]}',
            `Poblacion Dist II`='{$postData['Poblacion_Dist_II'][$index]}',
            `Poblacion Dist III`='{$postData['Poblacion_Dist_III'][$index]}',
            `Poblacion Dist IV`='{$postData['Poblacion_Dist_IV'][$index]}',
            `Poblacion Dist V`='{$postData['Poblacion_Dist_V'][$index]}',
            `Poblacion Dist VI`='{$postData['Poblacion_Dist_VI'][$index]}',
            Pongso='{$postData['Pongso'][$index]}',
            Roosevelt='{$postData['Roosevelt'][$index]}',
            `San Isidro`='{$postData['San_Isidro'][$index]}',
            `San Roque`='{$postData['San_Roque'][$index]}',
            `Santa Rosa`='{$postData['Santa_Rosa'][$index]}',
            Santarin='{$postData['Santarin'][$index]}',
            `Tutug-an`='{$postData['Tutug-an'][$index]}'
            WHERE year='$originalYear'";

        if (!$conn->query($updateSql)) {
            $success = false;
            echo "Error updating record: " . $conn->error;
            break;
        }
    }
} else {
    $success = false;
    echo "Invalid request method";
}

if ($success) {
    echo "Records updated successfully";
} else {
    echo "Error updating records";
}

$conn->close();
?>
