<?php
include 'admin_db_connection.php';
include 'db_connection.php';

session_start();

// Check if the form is submitted and the required fields are set
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["alert_message"]) && isset($_POST["alert_level"])) {

    // Handle file upload
    $uploadDir = "uploads/"; // Change this to the directory where you want to store uploaded images
    $uploadFile = $uploadDir . basename($_FILES['alert_image']['name']);

    if (move_uploaded_file($_FILES['alert_image']['tmp_name'], $uploadFile)) {
        echo "Image successfully uploaded.";
    } else {
        echo "Error uploading image.";
    }

    // Prepare and bind the data
    $stmt = $conn->prepare("INSERT INTO alerts (alert_message, alert_level, image_path, timestamp) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $flood_alert, $alert_level, $image_path, $timestamp);

    // Set parameters
    $flood_alert = $_POST["alert_message"];
    $alert_level = $_POST["alert_level"];
    $image_path = $uploadFile; // Store the path to the uploaded image
    $timestamp = date('Y-m-d H:i:s');

    // Execute the query
    if ($stmt->execute()) {
        echo "Alert added successfully";
    } else {
        echo "Cannot add Alert Message";
    }

    // Retrieve the currently logged-in employee_id
    $currentEmployeeId = $_SESSION['employee_id'];

    // Insert into logs table with the currently logged-in employee_id
    $section = "Alerts";
    $description = "Added an Emergency Alert";
    $date_time = date('Y-m-d H:i:s');
    $logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
    
    if ($conn->query($logSql) !== TRUE) {
        echo "Error inserting into logs: " . $conn->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "Invalid request";
}

// Close the database connection
$conn->close();
?>
