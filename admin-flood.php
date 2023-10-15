<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Ready: Flood Advisories</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/admin-flood.css">
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
    <a href="logout.php" style="width: 100px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path>
      </svg>
      <br>Logout
    </a>

    <a href="admin-reports.php">
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

    <a href="admin-typhoon.php">Typhoon</a>
    <a href="admin-flood.php" class="active">Flood</a>
    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
  <div class="division">
    <div id="map"></div>

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
    $sql = "SELECT latitude, longitude, level, barangay FROM map_markers";
    $result = $conn->query($sql);

    $hazardAreas = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hazardAreas[] = [
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

    
  <div class="svg-container">
  <img src="images/hazard-map1.png">
    <!-- </div> -->

    <!-- <div class="svg-container"> -->
    <img src="images/hazard-map2.png" style="left: 50%;">
</div>
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

$sql = "SELECT id, barangay, status FROM brgys_prone_to_flood";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
        <tr>
            <th>Edit</th>
            <th>Barangay</th>
            <th>Status</th>
            <th>Confirm</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td><button class='edit-button'><svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='#f9b314' viewBox='0 0 256 256' style='z-index: 1;'><path d='M221.66,90.34,192,120,136,64l29.66-29.66a8,8,0,0,1,11.31,0L221.66,79A8,8,0,0,1,221.66,90.34Z' opacity='0.2'></path><path d='M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM51.31,160,136,75.31,152.69,92,68,176.68ZM48,179.31,76.69,208H48Zm48,25.38L79.31,188,164,103.31,180.69,120Zm96-96L147.31,64l24-24L216,84.68Z'></path></svg></svg></button></td>
            <td style='font-weight: 600;'>" . $row["barangay"] . "</td>
            <td>" . $row["status"] . "</td>
            <input type='hidden' class='row-id' value='" . $row["id"] . "'>
        </tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

$conn->close();
?>
<script>
document.addEventListener("click", function (e) {
    if (e.target && e.target.classList.contains("edit-button")) {
        const row = e.target.closest("tr");
        const cells = row.getElementsByTagName("td");

        for (let i = 1; i < cells.length; i++) {
            const cell = cells[i];
            const text = cell.textContent.trim();
            const input = document.createElement("input");
            input.value = text;

            cell.innerHTML = "";
            cell.appendChild(input);
        }

        const editButton = e.target;
        const submitButton = document.createElement("button");
        submitButton.className = 'submit-button';
        submitButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f9b314" viewBox="0 0 256 256"><path d="M224,128a96,96,0,1,1-96-96A96,96,0,0,1,224,128Z" opacity="0.2"></path><path d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>';

        editButton.style.display = "none";
        row.querySelector(".row-id").value = row.querySelector(".row-id").value;
        row.insertBefore(submitButton, row.querySelector(".row-id"));
    }
    else if (e.target && e.target.classList.contains("submit-button")) {
        const row = e.target.closest("tr");
        const cells = row.getElementsByTagName("td");
        const rowId = row.querySelector(".row-id").value;
        const updatedBarangay = cells[1].getElementsByTagName("input")[0].value;
        const updatedStatus = cells[2].getElementsByTagName("input")[0].value;
        const formData = new FormData();
        formData.append('id', rowId);
        formData.append('barangay', updatedBarangay);
        formData.append('status', updatedStatus);

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "update_prone.php", true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = xhr.responseText;
                if (response === "success") {
                    cells[1].textContent = updatedBarangay;
                    cells[2].textContent = updatedStatus;
                    row.querySelector(".edit-button").style.display = "block";
                    row.querySelector(".submit-button").style.display = "none";
                }
            }
        };

        xhr.send(formData);
    }
});
</script>

            
        </div>


        <div class="early-alert">
        <h3>EMERGENCY ALERT & WARNING</h3>
        <div class="alert-message">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#f9b314" viewBox="0 0 256 256" style="position: absolute; top: 40%; left: 5%;"><path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path></svg>
          <p><span id="alertMessage"></span></p>
        </div>
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

  // Early warning and alert
 // Fetch data from OpenWeatherMap API
 fetch('https://api.openweathermap.org/data/2.5/weather?q=barugo,leyte&appid=ac61a2a4ee180f84e878fa11d084815d')
 .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json();
  })
  .then(data => {
    const alertMessage = document.getElementById('alertMessage');
    if (data.weather && data.weather.length > 0) {
      const weatherCondition = data.weather[0].main;
      if (weatherCondition.toLowerCase().includes('typhoon')) {
        alertMessage.innerText = 'Typhoon alert!';
      } else {
        alertMessage.innerText = 'No active Emergency Alert and Warning Message as of present time.';
      }
    } else {
      alertMessage.innerText = 'No alert available.';
    }
  })
  .catch(error => {
    console.log('Error fetching weather data:', error);
    const alertMessage = document.getElementById('alertMessage');
    alertMessage.innerText = 'Error fetching weather data.';
  });
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
    var hazardLevel = '<?php echo $area['level']; ?>'; // Get hazard level from PHP data
    var lat = <?php echo $area['lat']; ?>;
    var lng = <?php echo $area['lng']; ?>;
    var icon = getCustomIcon(hazardLevel); // Get the custom icon based on hazard level

    var marker = L.marker([lat, lng], { icon: icon })
        .bindPopup('<b><?php echo $area['name']; ?></b><br>Lat: ' + lat + '<br>Long: ' + lng);
        
    markers.push(marker);
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