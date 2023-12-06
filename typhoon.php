<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Ready: Typhoon Advisories & Alerts</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/typhoon.css">
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>
</head>
<body>
<div class="topnav" id="myTopnav">
  <img src="images/icon.png">
    <div class="topcont">
      <div class="p1">Republic of the Philippines</div>
      <div class="p2">Municipality of Barugo</div>
      <div class="p3">MDRRMO</div>
    </div>
    <a href="login.php" style="width: 70px; padding-left: 2%;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path>
      </svg>
      <br>Login
    </a>

    <!-- <a href="reports.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M88,112a8,8,0,0,1,8-8h80a8,8,0,0,1,0,16H96A8,8,0,0,1,88,112Zm8,40h80a8,8,0,0,0,0-16H96a8,8,0,0,0,0,16ZM232,64V184a24,24,0,0,1-24,24H32A24,24,0,0,1,8,184.11V88a8,8,0,0,1,16,0v96a8,8,0,0,0,16,0V64A16,16,0,0,1,56,48H216A16,16,0,0,1,232,64Zm-16,0H56V184a23.84,23.84,0,0,1-1.37,8H208a8,8,0,0,0,8-8Z"></path>
        </svg>
        <br>Reports
      </div>
    </a> -->

    <a href="map.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M228.92,49.69a8,8,0,0,0-6.86-1.45L160.93,63.52,99.58,32.84a8,8,0,0,0-5.52-.6l-64,16A8,8,0,0,0,24,56V200a8,8,0,0,0,9.94,7.76l61.13-15.28,61.35,30.68A8.15,8.15,0,0,0,160,224a8,8,0,0,0,1.94-.24l64-16A8,8,0,0,0,232,200V56A8,8,0,0,0,228.92,49.69ZM104,52.94l48,24V203.06l-48-24ZM40,62.25l48-12v127.5l-48,12Zm176,131.5-48,12V78.25l48-12Z"></path>
        </svg>
        <br>Map
      </div>
    </a>

    <a href="population.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
        </svg>
        <br>Population
      </div>
    </a>

    <a href="about.php">About</a>
    <a href="typhoon.php" class="active">Typhoon</a>
    <a href="flood.php">Flood</a>
    <a href="weather.php">Weather</a>
    <a href="index.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<iframe src="https://earth.nullschool.net/#current/wind/surface/level/orthographic=123.55,11.87,1751/loc=124.750,11.305" width="100%" height="590px" frameborder="0"></iframe>

  <?php
include 'db_connection.php';

// Retrieve the data from the database (latest row within 1 hour)
$sql = "SELECT * FROM alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the latest row within 1 hour
    while ($row = $result->fetch_assoc()) {
        $alertLevel = $row["alert_level"];
        $alertColor = getAlertColor($alertLevel);
        $fontColor = getFontColor($alertLevel);
    }
} else {
    // Default values if no data found
    $alertLevel = 'yellow';
    $alertColor = getAlertColor($alertLevel);
    $fontColor = getFontColor($alertLevel);
}

// Function to determine the background color based on alert_level
function getAlertColor($alertLevel) {
    switch ($alertLevel) {
        case 'yellow':
            return '#ffbb00'; // Yellow
        case 'orange':
            return '#ff8000'; // Orange
        case 'red':
            return '#ff0000'; // Red
        default:
            return '#f9b314'; // Default color
    }
}

// Function to determine the font color based on alert_level
function getFontColor($alertLevel) {
    switch ($alertLevel) {
        case 'yellow':
            return '#000000'; // Black
        case 'orange':
        case 'red':
            return '#ffffff'; // White for both Orange and Red
        default:
            return '#000000'; // Default font color (black)
    }
}
?>

  <div class="early-alert" style="background-color: <?php echo $alertColor; ?>">
    <h3 style="color: <?php echo $fontColor; ?>">EMERGENCY ALERT & WARNING</h3>
    <div class="alert-message">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="<?php echo $alertColor; ?>" viewBox="0 0 256 256" style="position: absolute; top: 40%; left: 5%;">
            <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
        </svg>
        <?php
        $sql = "SELECT * FROM alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR ORDER BY timestamp DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of the latest row within 1 hour
            while ($row = $result->fetch_assoc()) {
                if (!empty(trim($row["alert_message"]))) {
                    echo "<p>" . nl2br($row["alert_message"]) . "</p>";
                } else {
                    echo "<p>No active Emergency Alert and Warning Message as of present time.</p>";
                }
            }
        } else {
            echo "<p>No active Emergency Alert and Warning Message as of present time.</p>";
        }
        ?>
  </div>
</div>

<div class="container2">
<a href="https://www.pagasa.dost.gov.ph/index.php" target="_blank">
    <img src="images/pagasa.png">
      PAGASA 
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
      <path d="M192,136v72a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V80A16,16,0,0,1,48,64h72a8,8,0,0,1,0,16H48V208H176V136a8,8,0,0,1,16,0Zm32-96a8,8,0,0,0-8-8H152a8,8,0,0,0-5.66,13.66L172.69,72l-42.35,42.34a8,8,0,0,0,11.32,11.32L184,83.31l26.34,26.35A8,8,0,0,0,224,104Z"></path>
    </svg>
  </a>
  <a href="https://zoom.earth/maps/satellite/#view=11.91,123.46,5z" target="_blank">
    <img src="images/zoom_earth.png">
    ZOOM EARTH
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
      <path d="M192,136v72a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V80A16,16,0,0,1,48,64h72a8,8,0,0,1,0,16H48V208H176V136a8,8,0,0,1,16,0Zm32-96a8,8,0,0,0-8-8H152a8,8,0,0,0-5.66,13.66L172.69,72l-42.35,42.34a8,8,0,0,0,11.32,11.32L184,83.31l26.34,26.35A8,8,0,0,0,224,104Z"></path>
    </svg>
  </a>
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
  <div class="bulletin-info">
    <table>
      <tr>
        <td>Int'l Name:</td>
        <td><input type="text" name="int_name" id="int_name" value="<?php echo $int_name; ?>" disabled></td>
      </tr>

      <tr>
        <td>Local Name:</td>
        <td><input type="text" name="local_name" id="local_name" value="<?php echo $local_name; ?>" disabled></td>
      </tr>

      <tr>
        <td>Wind Speed:</td>
        <td><input type="text" name="wind_speed" id="wind_speed" value="<?php echo $wind_speed; ?> km/h" disabled></td>
      </tr>

      <tr>
        <td>Gustiness:</td>
        <td><input type="text" name="gust" id="gust" value="<?php echo $gust; ?> km/h" disabled></td>
      </tr>

      <tr>
        <td>Update On:</td>
        <td><input type="text" name="updated_on" id="direction" value="<?php echo $updated_on; ?>" disabled></td>
      </tr>
    </table>
  </div>
</div>

<!-- <div class="img-container"> -->
<?php
require 'vendor/autoload.php';

use phpseclib\Net\SFTP;

include "db_connection.php";

$sql = "SELECT * FROM alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR AND image_path IS NOT NULL ORDER BY timestamp DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (!empty($row["image_path"]) && !empty($row["timestamp"])) {
            // Create an instance of Net_SFTP
            $sftp = new SFTP('edr.topfavlists.com');

            // Replace 'your_username' and 'your_password' with your actual SFTP credentials
            if (!$sftp->login('edr', '3fQoT8cgRu')) {
                die('Login Failed');
            }

            // Set the remote file path on the SFTP server
            $remoteFilePath = $row["image_path"];

            // Set the local directory where you want to save the downloaded image
            $localDirPath = 'C:/xampp/htdocs/mdrrmo/uploads'; // Provide an appropriate local path

            // Check if the local directory exists, if not, create it
            if (!file_exists($localDirPath) && !is_dir($localDirPath)) {
                mkdir($localDirPath, 0777, true);
            }

            // Set the local file path
            $localFilePath = $localDirPath . '/' . basename($remoteFilePath);

            // Download the image from the SFTP server
            if ($sftp->get($remoteFilePath, $localFilePath)) {
                // Check if the file was successfully downloaded
                if (file_exists($localFilePath)) {
                    // Display the alert only if image_path is not null
                    echo "<script>alert('See Downloads to view image!');</script>";
                } else {
                    echo 'Error: Local file not found after download.';
                }
            } else {
                echo 'Error downloading the image from the SFTP server. SFTP Error: ' . $sftp->getLastSFTPError();
            }
        }
    }
}

$conn->close();
?>





<!-- </div> -->

    <menu class="menu" style="--timeOut: none">
      <button class="menu__item active" style="--bgColorItem: #04aa6d">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
        <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z"></path>
    </svg>
      </button>

      <button class="menu__item" style="--bgColorItem: #043a87">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
          <path d="M228.92,49.69a8,8,0,0,0-6.86-1.45L160.93,63.52,99.58,32.84a8,8,0,0,0-5.52-.6l-64,16A8,8,0,0,0,24,56V200a8,8,0,0,0,9.94,7.76l61.13-15.28,61.35,30.68A8.15,8.15,0,0,0,160,224a8,8,0,0,0,1.94-.24l64-16A8,8,0,0,0,232,200V56A8,8,0,0,0,228.92,49.69ZM104,52.94l48,24V203.06l-48-24ZM40,62.25l48-12v127.5l-48,12Zm176,131.5-48,12V78.25l48-12Z"></path>
        </svg>
      </button>

      <button class="menu__item" style="--bgColorItem: #ffbb00">
      <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
        <path d="M80,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H88A8,8,0,0,1,80,64Zm136,56H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,64H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16ZM44,52A12,12,0,1,0,56,64,12,12,0,0,0,44,52Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,116Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,180Z"></path>
    </svg>
      </button>

      <div
        class="menu__border"
        style="transform: translate3d(0px, 0px, 0px)"
      ></div>
    </menu>

    <div class="svg-container">
      <svg viewBox="0 0 202.9 45.5">
        <clipPath
          id="menu"
          clipPathUnits="objectBoundingBox"
          transform="scale(0.0049285362247413 0.021978021978022)"
        >
          <path
            d="M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7
          c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5
          c9.2,3.6,17.6,4.2,23.3,4H6.7z"
          ></path>
        </clipPath>
      </svg>
    </div>

<!-- Modal container -->
<div class="modal-img" id="modal-img">
  <?php
  include "db_connection.php";
  $sql = "SELECT * FROM alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR ORDER BY timestamp DESC LIMIT 1";
  $result = $conn->query($sql);

    // Display the image inside the modal
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        if (!empty($row["image_path"])) {
          echo '<img src="' . $row["image_path"] . '" onclick="closeModal()">';
        }
      }
    }

    $conn->close();
  ?>
</div>

<script>
function openModal() {
  document.querySelector('.modal-img').classList.add('active');
}

function closeModal() {
  document.querySelector('.modal-img').classList.remove('active');
}

"use strict"; 

const body = document.body;
const bgColorsBody = ["#04aa6d", "#043a87", "#ffcc00", "#ff6600", "#ff0000"];
const menu = body.querySelector(".menu");
const menuItems = menu.querySelectorAll(".menu__item");
const menuBorder = menu.querySelector(".menu__border");
let activeItem = menu.querySelector(".active");

function clickItem(item, index) {

    menu.style.removeProperty("--timeOut");
    
    if (activeItem == item) return;
    
    if (activeItem) {
        activeItem.classList.remove("active");
    }

    
    item.classList.add("active");
    body.style.backgroundColor = bgColorsBody[index];
    activeItem = item;
    offsetMenuBorder(activeItem, menuBorder);
    
    
}

function offsetMenuBorder(element, menuBorder) {

    const offsetActiveItem = element.getBoundingClientRect();
    const left = Math.floor(offsetActiveItem.left - menu.offsetLeft - (menuBorder.offsetWidth  - offsetActiveItem.width) / 2) +  "px";
    menuBorder.style.transform = `translate3d(${left}, 0 , 0)`;

}

offsetMenuBorder(activeItem, menuBorder);

menuItems.forEach((item, index) => {

    item.addEventListener("click", () => clickItem(item, index));
    
})

window.addEventListener("resize", () => {
    offsetMenuBorder(activeItem, menuBorder);
    menu.style.setProperty("--timeOut", "none");
});

document.addEventListener("DOMContentLoaded", function () {
  var dropdownButton = document.querySelector(".dropbtn");

  dropdownButton.addEventListener("click", function () {
    var dropdownContent = document.querySelector(".dropdown-content");
    dropdownContent.style.height = (dropdownContent.style.height === "65vh") ? "0" : "65vh";
  });
});

function showSnackbar(message) {
    var snackbar = document.getElementById("snackbar");
    snackbar.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#0864e6" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm-8,56a8,8,0,0,1,16,0v56a8,8,0,0,1-16,0Zm8,104a12,12,0,1,1,12-12A12,12,0,0,1,128,184Z"></path></svg><div>' 
      + message + 
      '</div><button id="closeSnackbar">OK</button>';
    snackbar.style.visibility = "visible";
    snackbar.style.opacity = 1;

    var closeBtn = document.getElementById("closeSnackbar");
    closeBtn.addEventListener("click", function() {
        hideSnackbar(snackbar);
    });
}

function hideSnackbar(snackbar) {
    snackbar.style.opacity = 0;
    setTimeout(function() {
        snackbar.style.visibility = "hidden";
        // Reload the page when the snackbar is closed
        // location.reload();
    }, 300);
}
</script>
</body>
</html>