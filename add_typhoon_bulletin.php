<?php
include "db_connection.php";

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

$conn->close();
?>
