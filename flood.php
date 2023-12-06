<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Ready: Flood Advisories</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/flood.css">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
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
      <p>Login</p>
    </a>

    <a href="map.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M228.92,49.69a8,8,0,0,0-6.86-1.45L160.93,63.52,99.58,32.84a8,8,0,0,0-5.52-.6l-64,16A8,8,0,0,0,24,56V200a8,8,0,0,0,9.94,7.76l61.13-15.28,61.35,30.68A8.15,8.15,0,0,0,160,224a8,8,0,0,0,1.94-.24l64-16A8,8,0,0,0,232,200V56A8,8,0,0,0,228.92,49.69ZM104,52.94l48,24V203.06l-48-24ZM40,62.25l48-12v127.5l-48,12Zm176,131.5-48,12V78.25l48-12Z"></path>
        </svg>
        <p>Map</p>
      </div>
    </a>

    <a href="population.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
        </svg>
        <p>Population</p>
      </div>
    </a>

    <a href="about.php">About</a>
    <a href="typhoon.php">Typhoon</a>
    <a href="flood.php" class="active">Flood</a>
    <a href="weather.php">Weather</a>
    <a href="index.php">Home</a>
    
    <button class="dropbtn">
      <i class="fa fa-bars"></i>
    </button>

    
</div>
    <div class="dropdown-content">
      <a href="index.php">Home</a>
      <a href="weather.php">Weather</a>
      <a href="flood.php" class="active">Flood</a>
      <a href="typhoon.php">Typhoon</a>
      <a href="about.php">About</a>
      <a href="population.php">Population</a>
      <a href="map.php">Map</a>
      <a href="login.php">Login</a>
    </div>

<div class="main">

<div class="legend-cont">
    <h3>LEGEND</h3>
      <div class="button-container">

      <button class="hazard-level-button" data-level="All">
        <div class="hazard-level-color active" style="background-color: #000000;"></div>
        <p>All</p>
      </button>

      <button class="hazard-level-button" data-level="Normal" style="margin-top: 10%;">
        <div class="hazard-level-color" style="background-color: #043a87"></div>
        <p>Normal</p>
      </button>

      <button class="hazard-level-button" data-level="Low">
        <div class="hazard-level-color" style="background-color: #ffbb00"></div>
        <p>Low</p>
      </button>

      <button class="hazard-level-button" data-level="Medium">
        <div class="hazard-level-color" style="background-color: #ff8000"></div>
        <p>Medium</p>
      </button>

      <button class="hazard-level-button" data-level="High">
        <div class="hazard-level-color" style="background-color: #ff0000;"></div>
        <p>High</p>
      </button>
    </div>
  </div>

    <div id="map"></div>
  
    <?php
    include 'db_connection.php';

    // Fetch hazard-prone area data from the database
    $sql = "SELECT * FROM map_markers";
    $result = $conn->query($sql);

    $hazardAreas = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hazardAreas[] = [
                'display' => $row['display_marker'],
                'lat' => $row['latitude'],
                'lng' => $row['longitude'],
                'name' => $row['barangay'],
                'level' => $row['level']
            ];
        }
    }
    ?>

<?php
include 'db_connection.php';

// Retrieve the data from the database (latest row within 1 hour)
$sql = "SELECT * FROM flood_alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR ORDER BY timestamp DESC LIMIT 1";
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
            return '#cc0000'; // Red
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
        $sql = "SELECT * FROM flood_alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR ORDER BY timestamp DESC LIMIT 1";
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


<?php
require 'vendor/autoload.php';

use phpseclib\Net\SFTP;

include "db_connection.php";

$sql = "SELECT * FROM flood_alerts WHERE timestamp >= NOW() - INTERVAL 12 HOUR AND image_path IS NOT NULL ORDER BY timestamp DESC LIMIT 1";
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
            $localDirPath = 'c:\Users\Windows\Downloads'; // Provide an appropriate local path

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

        

        <div class="prone-table">
          <h1>BARANGAYS PRONE TO FLOOD</h1>
            <?php

include 'db_connection.php';

$sql = "SELECT barangay, status FROM brgys_prone_to_flood";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
      <tr>
        <th>Barangay</th>
        <th>Status</th>
      </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
          <td style='font-weight: 600;'>" . $row["barangay"] . "</td>
          <td>" . $row["status"] . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

$conn->close();
?>

            
        </div>


    <menu class="menu" style="--timeOut: none">
      <button class="menu__item active" style="--bgColorItem: #04aa6d" data-level="All">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
            <path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path>
        </svg>
        <p>All</p>
      </button>

      <button class="menu__item" style="--bgColorItem: #043a87" data-level="Normal">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
            <path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path>
        </svg>
        <p>Normal</p>
      </button>

      <button class="menu__item" style="--bgColorItem: #ffbb00" data-level="Low">
        <svg class="icon second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
            <path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path>
        </svg>
        <p>Low</p>
      </button>

      <button class="menu__item" style="--bgColorItem: #ff8000" data-level="Medium">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
            <path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path>
        </svg>
        <p>Medium</p>
      </button>

      <button class="menu__item" style="--bgColorItem: #ff0000" data-level="High">
        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
            <path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path>
        </svg>
        <p>High</p>
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
    
</div>

<div class="footer">
  <div class="foot-txt">
  <img src="images/footer.png" style="height: 100%; width: 80%;">
  </div>

  <div class="foot-txt">
      <font style="font-weight: 700;">REPUBLIC OF THE PHILIPPINES</font>
      All content is in the public domain unless otherwise stated.
  </div>

  <div class="foot-txt">
    <font style="font-weight: 700;">ABOUT GOVPH</font>
    Learn more about the Philippine government, its structure, how government works and the people behind it.
  </div>
</div>

<script>
    // Define custom SVG icons for different hazard types
    var floodNormalIcon = L.divIcon({
        className: 'custom-icon',
        html: '<div class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#043a87" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg></div>', // Replace with your SVG code
        iconSize: [32, 32],
    });

    var floodLowIcon = L.divIcon({
        className: 'custom-icon',
        html: '<div class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ffbb00" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg></div>', // Replace with your SVG code
        iconSize: [32, 32],
    });

    var floodMediumIcon = L.divIcon({
        className: 'custom-icon',
        html: '<div class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ff8000" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg></div>', // Replace with your SVG code
        iconSize: [32, 32],
    });

    var floodHighIcon = L.divIcon({
        className: 'custom-icon',
        html: '<div class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ff0000" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg></div>', // Replace with your SVG code
        iconSize: [32, 32],
    });

   // Initialize Leaflet map
var map = L.map('map').setView([11.2800, 124.7700], 12); // Coordinates for Barugo, Leyte

// Add tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 30,
    attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors'
}).addTo(map);

// Create an object to store all markers
var markers = [];

// Add flood-prone area markers with custom SVG icons (similar to your PHP loop)
<?php foreach ($hazardAreas as $area): ?>
    <?php if ($area['display'] === 'y'): ?>
        var hazardLevel = '<?php echo $area['level']; ?>'; // Get hazard level from PHP data
        var lat = <?php echo $area['lat']; ?>;
        var lng = <?php echo $area['lng']; ?>;
        var icon = getCustomIcon(hazardLevel); // Get the custom icon based on hazard level

        var marker = L.marker([lat, lng], { icon: icon })
            .bindPopup('<b><?php echo $area['name']; ?></b><br>Lat: ' + lat + '<br>Long: ' + lng);

        markers.push(marker);
    <?php endif; ?>
<?php endforeach; ?>


// Function to get the custom icon based on hazard level
function getCustomIcon(level) {
    if (level === 'Low') return floodLowIcon;
    else if (level === 'Medium') return floodMediumIcon;
    else if (level === 'High') return floodHighIcon;
    else return floodNormalIcon;
}

// Function to show/hide markers based on selected hazard level
function updateMarkers(selectedLevel) {
    // Remove all markers from the map
    markers.forEach(function(marker) {
        map.removeLayer(marker);
    });

    // Filter and add only the markers with the selected hazard level
    markers.forEach(function(marker) {
        var hazardLevel = getHazardLevel(marker.options.icon);

        if (selectedLevel === 'All' || selectedLevel === hazardLevel) {
            map.addLayer(marker);
        }
    });
}

// Function to get hazard level from icon class name
function getHazardLevel(icon) {
    if (icon === floodLowIcon) return 'Low';
    else if (icon === floodMediumIcon) return 'Medium';
    else if (icon === floodHighIcon) return 'High';
    else return 'Normal';
}

// Attach a click event listener to both hazard level buttons and menu items
var buttons = document.querySelectorAll('.hazard-level-button, .menu__item');
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        // Remove the 'active' class from all buttons
        buttons.forEach(function(btn) {
            if (btn.querySelector('.hazard-level-color')) {
                // For hazard level buttons
                btn.querySelector('.hazard-level-color').classList.remove('active');
            } else {
                // For menu items
                btn.classList.remove('active');
            }
        });

        // Add the 'active' class to the clicked button
        if (this.querySelector('.hazard-level-color')) {
            // For hazard level buttons
            this.querySelector('.hazard-level-color').classList.add('active');
        } else {
            // For menu items
            this.classList.add('active');
        }

        var selectedLevel = this.getAttribute('data-level');
        updateMarkers(selectedLevel);
    });
});



// Initially, show all markers
updateMarkers('All');


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
</script>

</body>
</html>