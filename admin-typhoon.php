<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Ready Admin: Typhoon Advisories</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/admin-typhoon.css">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="topnav" id="myTopnav">
  <img src="images/icon.png">
    <div class="topcont">
      <div class="p1">Republic of the Philippines</div>
      <div class="p2">Municipality of Barugo</div>
      <div class="p3">MDRRMO</div>
    </div>
    
    <div class="dropdown">
    <?php
    // Assuming you have stored the logged-in user's ID in a session variable named $_SESSION['id']
    if(isset($_SESSION['id'])){
        $logged_in_id = $_SESSION['id'];

        include 'admin_db_connection.php';

        $sql = "SELECT * FROM users WHERE id = $logged_in_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $image = $row["image"];
                $first_name = $row["first_name"][0] . ".";
                $last_name = $row["last_name"];
                echo "<div class='dropdown'>
                        <button class='dropbtn'><img src='$image' alt='User Image'>$first_name $last_name
                            <i class='fa fa-caret-down' style='margin-left: 1em;'></i>
                        </button>
                        <div class='dropdown-content'>
                            <a href='logout.php' style='height: 3em;width: 14em; padding: 0; border-top: 1px solid #e5a920; font-size: 12px;'>
                                <p>Logout</p>
                            </a>
                        </div>
                    </div>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    } else {
        // Handle the case where the user is not logged in
        // You might want to redirect the user to the login page or handle the situation in some other way
        echo "User not logged in.";
    }
?>


<script>
  // JavaScript for dropdown functionality
  document.addEventListener("DOMContentLoaded", function() {
    var dropdown = document.querySelector(".dropdown");
    dropdown.addEventListener("click", function() {
      var dropdownContent = dropdown.querySelector(".dropdown-content");
      dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    });
  });
</script>
</div>

    <a href="reports-flood.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M88,112a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H96A8,8,0,0,1,88,112Zm8,40h80a8,8,0,0,0,0-16H96a8,8,0,0,0,0,16ZM232,64V184a24,24,0,0,1-24,24H32A24,24,0,0,1,8,184.11V88a8,8,0,0,1,16,0v96a8,8,0,0,0,16,0V64A16,16,0,0,1,56,48H216A16,16,0,0,1,232,64Zm-16,0H56V184a23.84,23.84,0,0,1-1.37,8H208a8,8,0,0,0,8-8Z"></path>
        </svg>
        <br>Reports
      </div>
    </a>

    <a href="admin-map.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M228.92,49.69a8,8,0,0,0-6.86-1.45L160.93,63.52,99.58,32.84a8,8,0,0,0-5.52-.6l-64,16A8,8,0,0,0,24,56V200a8,8,0,0,0,9.94,7.76l61.13-15.28,61.35,30.68A8.15,8.15,0,0,0,160,224a8,8,0,0,0,1.94-.24l64-16A8,8,0,0,0,232,200V56A8,8,0,0,0,228.92,49.69ZM104,52.94l48,24V203.06l-48-24ZM40,62.25l48-12v127.5l-48,12Zm176,131.5-48,12V78.25l48-12Z"></path>
        </svg>
        <br>Map
      </div>
    </a>

    <a href="admin-population.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
        </svg>
        <br>Population
      </div>
    </a>

    
    <a href="admin-about.php">About</a>
    <a href="admin-typhoon.php" class="active">Typhoon</a>
    <a href="admin-email.php">Email</a>
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<iframe src="https://earth.nullschool.net/#current/wind/surface/level/orthographic=123.55,11.87,1751/loc=124.750,11.305" width="100%" height="590px" frameborder="0"></iframe>

  <form action="store_typhoon_alert.php" method="post" onsubmit="submitForm(event)">
  <div class="early-alert">
    <h3>EMERGENCY ALERT & WARNING</h3>
    <button class="early-alert-btn" type="submit" value="Done">Done</button>
    <div class="alert-message">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#f9b314" viewBox="0 0 256 256" style="position: absolute; top: 40%; left: 5%;">
            <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
        </svg>
        <p><textarea id="typhoon_alert" name="typhoon_alert" placeholder="Enter Emergency Flood Alert/Warning Message here." onkeydown="if(event.keyCode === 13){if(!event.shiftKey){this.value += '\n'; event.preventDefault();}}"></textarea></p>
            
            </form>
            <script>
        function submitForm(event) {
            event.preventDefault();
            var form = event.target;
            var formData = new FormData(form);
    
            var xhr = new XMLHttpRequest();
            xhr.open("POST", form.action, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = xhr.responseText.trim();
                    showSnackbar(response);
                }
            };
            xhr.send(formData);
        }
    
        function showSnackbar(message) {
            var snackbar = document.getElementById("snackbar");
            snackbar.textContent = message;
            snackbar.style.visibility = "visible";
            setTimeout(function() {
                snackbar.style.opacity = 1;
            }, 1);
            setTimeout(function() {
                snackbar.style.opacity = 0;
            }, 2500);
            setTimeout(function() {
                snackbar.style.visibility = "hidden";
            }, 3000);
        }
    </script>
    <div id="snackbar"></div>
        </div>
</div>

<div class="container">
<a href="https://www.pagasa.dost.gov.ph/index.php" target="_blank"><img src="images/pagasa.png">PAGASA</a>
<a href="https://zoom.earth/maps/satellite/#view=11.91,123.46,5z" target="_blank"><img src="images/zoom_earth.png">ZOOM EARTH</a>
</div>


<?php
// Replace with your actual database credentials
include "db_connection.php";

// Fetch the last row from the table
$sql = "SELECT * FROM typhoon_bulletin WHERE updated_on >= NOW() - INTERVAL 12 HOUR ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Output data of the last row
  $row = $result->fetch_assoc();
  $int_name = $row["int_name"];
  $local_name = $row["local_name"];
  $location = $row["location"];
  $wind_speed = $row["wind_speed"];
  $gust = $row["gust"];
  $movement = $row["movement"];
  $direction = $row["direction"];
  $updated_on = $row["updated_on"];
} else {
  $int_name = "N/A";
  $local_name = "N/A";
  $location = "N/A";
  $wind_speed = "N/A";
  $gust = "N/A";
  $movement = "N/A";
  $direction = "N/A";
  $updated_on = "N/A";
}
$conn->close();
?>


<div class="bulletin">
  <h1>Typhoon Bulletin</h1>
  <form action="add_typhoon_bulletin.php" method="post" onsubmit="submitBulletin(event)">
  <div class="bulletin-info">
    <table>
      <tr>
        <td>International Name:</td>
        <td><input type="text" name="int_name" id="int_name" placeholder="<?php echo $int_name; ?>"></td>
      </tr>

      <tr>
        <td>Local Name:</td>
        <td><input type="text" name="local_name" id="local_name" placeholder="<?php echo $local_name; ?>"></td>
      </tr>

      <tr>
        <td>Location:</td>
        <td><input type="text" name="location" id="location" placeholder="<?php echo $location; ?> km/h"></td>
      </tr>

      <tr>
        <td>Wind Speed:</td>
        <td><input type="text" name="wind_speed" id="wind_speed" placeholder="<?php echo $wind_speed; ?> km/h"></td>
      </tr>

      <tr>
        <td>Gustiness:</td>
        <td><input type="text" name="gust" id="gust" placeholder="<?php echo $gust; ?> km/h"></td>
      </tr>

      <tr>
        <td>Movement:</td>
        <td><input type="text" name="movement" id="movement" placeholder="<?php echo $movement; ?>"></td>
      </tr>

      <tr>
        <td>Direction:</td>
        <td><input type="text" name="direction" id="direction" placeholder="<?php echo $direction; ?>"></td>
      </tr>

      <tr>
        <td>Update On:</td>
        <td><input type="text" name="updated_on" id="direction" value="<?php echo $updated_on; ?>" style="outline: none;" disabled></td>
      </tr>
    </table>
  </div>
  <button type="submit" value="Confirm">Confirm</button>

  </form>
  <script>
        function submitBulletin(event) {
            event.preventDefault();
            var form = event.target;
            var formData = new FormData(form);
    
            var xhr = new XMLHttpRequest();
            xhr.open("POST", form.action, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = xhr.responseText.trim();
                    showSnackbar(response);
                }
            };
            xhr.send(formData);
        }
    
        function showSnackbar(message) {
            var snackbar = document.getElementById("snackbar");
            snackbar.textContent = message;
            snackbar.style.visibility = "visible";
            setTimeout(function() {
                snackbar.style.opacity = 1;
            }, 1);
            setTimeout(function() {
                snackbar.style.opacity = 0;
            }, 2500);
            setTimeout(function() {
                snackbar.style.visibility = "hidden";
            }, 3000);
        }

        // TOPNAV
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>
    <div id="snackbar"></div>
</div>