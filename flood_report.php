<?php
// Establish a database connection (replace with your credentials)
$mysqli = new mysqli('localhost', 'root', '', 'edr_db');

// Check for connection errors
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Retrieve event details from the form
$sitio = $_POST['sitio'];
$families = $_POST['families'];
$persons_m = $_POST['personsM'];
$persons_f = $_POST['personsF'];
$persons_lgbt = $_POST['personsLgbt'];
$disabilities_m = $_POST['disabilitiesM'];
$disabilities_f = $_POST['disabilitiesF'];
$diseases_m = $_POST['diseasesM'];
$diseases_f = $_POST['diseasesF'];
$children1_m = $_POST['children1M'];
$children1_f = $_POST['children1F'];
$children2_m = $_POST['children2M'];
$children2_f = $_POST['children2F'];
$children3_m = $_POST['children3M'];
$children3_f = $_POST['children3F'];
$children4_m = $_POST['children4M'];
$children4_f = $_POST['children4F'];
$children5_m = $_POST['children5M'];
$children5_f = $_POST['children5F'];
$adult1_m = $_POST['adult1M'];
$adult1_f = $_POST['adult1F'];
$adult2_m = $_POST['adult2M'];
$adult2_f = $_POST['adult2F'];
$pregnant = $_POST['pregnant'];

// Insert event data into the "events" table
$query = "INSERT INTO flood_report (sitio, families, persons_m, persons_f, persons_lgbt, disabilities_m, disabilities_f, diseases_m, diseases_f, children1_m, children1_f, children2_m, children2_f, children3_m, children3_f, children4_m, children4_f, children5_m, children5_f, adult1_m, adult1_f, adult2_m, adult2_f, pregnant) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

if ($stmt === false) {
    die('Error preparing statement.');
}

$stmt->bind_param('ssiiiiiiiiiiiiiiiiiiiiii', $sitio, $families, $persons_m, $persons_f, $persons_lgbt, $disabilities_m, $disabilities_f, $diseases_m, $diseases_f, $children1_m, $children1_f, $children2_m, $children2_f, $children3_m, $children3_f, $children4_m, $children4_f, $children5_m, $children5_f, $adult1_m, $adult1_f, $adult2_m, $adult2_f, $pregnant);

if ($stmt->execute()) {
    
    header('Location: reports-flood.php');
    $eventAddedSuccessfully = true;
} else {
    $eventAddedSuccessfully = false;
    echo 'Error adding event: ' . $stmt->error;
}

// Close the database connection
$stmt->close();
$mysqli->close();
?>
