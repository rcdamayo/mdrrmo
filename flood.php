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
    <a href="" style="width: 70px;">
      <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path>
      </svg>
      <br>Login -->
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
    <a href="typhoon.php">Typhoon</a>
    <a href="flood.php" class="active">Flood</a>
    <a href="weather.php">Weather</a>
    <a href="index.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
  <div class="division">

  
    <div id="map"></div>

    <div class="early-alert">
    <h3>EMERGENCY ALERT & WARNING</h3>
    <div class="alert-message">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#f9b314" viewBox="0 0 256 256" style="position: absolute; top: 40%; left: 5%;">
            <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
        </svg>
        <?php
            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "disaster_ready";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve the data from the database (latest row within 1 hour)
            $sql = "SELECT * FROM flood_alert WHERE timestamp >= NOW() - INTERVAL 12 HOUR ORDER BY timestamp DESC LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // Output data of the latest row within 1 hour
              while ($row = $result->fetch_assoc()) {
                  echo "<p>" . nl2br($row["alert_message"]) . "</p>";
              }
          } else {
              echo "No active Emergency Alert and Warning Message as of present time.";
          }
      ?>
  </div>
</div>


  
    <?php
    // Connect to your MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "disaster_ready";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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

  <div class="legend-cont">
    <h3>LEGEND</h3>
      <div class="button-container">

      <button class="hazard-level-button" data-level="All">
        <div class="hazard-level-color" style="background-color: #000000;"></div>
        <p>All</p>
      </button>

      <button class="hazard-level-button" data-level="Normal" style="margin-top: 10%;">
        <div class="hazard-level-color" style="background-color: #043a87"></div>
        <p>Normal</p>
      </button>

      <button class="hazard-level-button" data-level="Low">
        <div class="hazard-level-color" style="background-color: #ffff00"></div>
        <p>Low</p>
      </button>

      <button class="hazard-level-button" data-level="Medium">
        <div class="hazard-level-color" style="background-color: #ffa500"></div>
        <p>Medium</p>
      </button>

      <button class="hazard-level-button" data-level="High">
        <div class="hazard-level-color" style="background-color: #ff0000;"></div>
        <p>High</p>
      </button>
    </div>
  </div>

    
  <!-- <div class="svg-container">
  <img src="images/hazard-map1.png">

    <img src="images/hazard-map2.png" style="left: 50%;">
  </div> -->
</div>

    <div class="division">
        <h1>BARANGAYS PRONE TO FLOOD</h1>

        <div class="prone-table">

            <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "disaster_ready";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
        html: '<div class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ffff00" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg></div>', // Replace with your SVG code
        iconSize: [32, 32],
    });

    var floodMediumIcon = L.divIcon({
        className: 'custom-icon',
        html: '<div class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ffa500" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg></div>', // Replace with your SVG code
        iconSize: [32, 32],
    });

    var floodHighIcon = L.divIcon({
        className: 'custom-icon',
        html: '<div class="svg-icon"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#ff0000" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg></div>', // Replace with your SVG code
        iconSize: [32, 32],
    });

   // Initialize Leaflet map
var map = L.map('map').setView([11.3167, 124.7333], 12); // Coordinates for Barugo, Leyte

// Add tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
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

// Attach a click event listener to the hazard level buttons
var buttons = document.querySelectorAll('.hazard-level-button');
buttons.forEach(function(button) {
    button.addEventListener('click', function() {
        var selectedLevel = this.getAttribute('data-level');
        updateMarkers(selectedLevel);
    });
});

// Initially, show all markers
updateMarkers('All');
</script>

</body>
</html>