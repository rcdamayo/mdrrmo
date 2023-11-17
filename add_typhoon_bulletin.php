<?php
include "admin_db_connection.php";
include "db_connection.php";

session_start();

// Assuming you have received the form data through POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $int_name = $_POST['int_name'];
  $local_name = $_POST['local_name'];
  $location = $_POST['location'];
  $wind_speed = $_POST['wind_speed'];
  $gust = $_POST['gust'];
  $movement = $_POST['movement'];
  $direction = $_POST['direction'];

  // SQL query to insert data into the database
  $sql = "INSERT INTO typhoon_bulletin (int_name, local_name, location, wind_speed, gust, movement, direction) 
          VALUES ('$int_name', '$local_name', '$location', '$wind_speed', '$gust', '$movement', '$direction')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Retrieve the currently logged-in employee_id
$currentEmployeeId = $_SESSION['employee_id'];

// Insert into logs table with the currently logged-in employee_id
$section = "Typhoon";
$description = "Updated Typhoon Bulletin";
$date_time = date('Y-m-d H:i:s');
$logSql = "INSERT INTO logs (section, description, date_time, employee_id) VALUES ('$section', '$description', '$date_time', '$currentEmployeeId')";
if ($conn->query($logSql) !== TRUE) {
    echo "Error inserting into logs: " . $conn->error;
}

$conn->close();
?>
