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
  <title>Disaster Ready Admin: Map</title>
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/admin-map.css">
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
  
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

    <a href="admin-map.php" class="active">
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
    <a href="admin-typhoon.php">Typhoon</a>
    <a href="admin-contact.php">Contact</a>
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>


<div class="main">
  <!-- <div class="division"> -->
    <div id="map"></div>

    <div class="input-container">
      <h1>MARKERS </h1>

      <form id='editForm' method='post'>
        <button type='button' class='submit-evac' onclick='updateData()'>UPDATE</button>

        <div class="evac-table">

        <?php
    include 'db_connection.php';

    // Fetch hazard-prone area data from the database
    $sql = "SELECT * FROM evac_centers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table-data'>
                <tr>
                    <th>Name</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td><input type='text' name='name[]' value='" . $row["name"] . "'></td>
                <td><input type='text' name='latitude[]' value='" . $row["latitude"] . "'></td>
                <td><input type='text' name='longitude[]' value='" . $row["longitude"] . "'></td>
                <input type='hidden' name='id[]' value='" . $row["id"] . "'>
            </tr>";
        }

        echo "</table>";
        echo '<button type="button" class="add-row" onclick="addRow()">+</button>';
        echo "</form>";
    } else {
        echo "No results found";
    }

    $conn->close();
?>

<div id="snackbar"></div>

<script>
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

function updateData() {
    var form = document.getElementById("editForm");
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_evac.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = xhr.responseText.trim();
                if (response.includes('Error')) {
                    showSnackbar("Error updating evacuation centers");
                } else {
                    showSnackbar("Evacuation Centers updated successfully");
                }
            } else {
                showSnackbar("Error updating evacutation centers");
            }
        }
    };
    xhr.send(formData);
}

var cells = document.querySelectorAll("td input");
cells.forEach(function(cell) {
    cell.setAttribute("contentEditable", true);
});

function addRow() {
    var tables = document.getElementsByClassName('table-data');
    var table = tables[0]; // Assuming the first table with the class "map-markers-table"

    var newRow = table.insertRow(-1);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);

    cell1.innerHTML = "<input type='text' name='new_name[]' value=''>";
    cell2.innerHTML = "<input type='text' name='new_latitude[]' value=''>";
    cell3.innerHTML = "<input type='text' name='new_longitude[]' value=''>";
}

</script>
    </div>
  </div>




  <script>
 // Initialize the map
const mymap = L.map('map').setView([11.3167, 124.7333], 20);

// Add a tile layer from OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: 'Route for the nearest evacuation center from your location'
}).addTo(mymap);

// Create an SVG icon for the pins
const svgIcon = L.divIcon({
    className: 'custom-svg-icon',
    html: '<svg xmlns="http://www.w3.org/2000/svg" fill="#ff0000" viewBox="0 0 256 256"><path d="M128,16a88.1,88.1,0,0,0-88,88c0,75.3,80,132.17,83.41,134.55a8,8,0,0,0,9.18,0C136,236.17,216,179.3,216,104A88.1,88.1,0,0,0,128,16Zm0,56a32,32,0,1,1-32,32A32,32,0,0,1,128,72Z"></path></svg>',
    iconSize: [25, 25], // Set the icon size
    iconAnchor: [12, 30], // Set the icon anchor to center bottom
});

// Create a layer for the pins
const pinsLayer = L.layerGroup().addTo(mymap);

// Function to calculate and add routing to the nearest pin
function calculateAndAddRouting(userLat, userLng, data) {
    let nearestPin = null;
    let nearestDistance = Infinity;

    data.forEach((pin) => {
        const pinLat = pin.lat;
        const pinLng = pin.lng;
        const distance = Math.sqrt((pinLat - userLat) ** 2 + (pinLng - userLng) ** 2);

        if (distance < nearestDistance) {
            nearestDistance = distance;
            nearestPin = pin;
        }
    });

    // Add routing control to the nearest pin
    L.Routing.control({
        waypoints: [
            L.latLng(userLat, userLng),
            L.latLng(nearestPin.lat, nearestPin.lng)
        ],
        lineOptions: {
            styles: [{ color: 'blue', opacity: 0.6, weight: 4 }]
        },
        show: false // Set show option to false to hide the direction text
    }).addTo(mymap);
}

// Fetch data from the PHP script
fetch('get_evac_centers.php') // Replace with the correct path to your PHP script
    .then(response => response.json())
    .then(data => {
        // Add markers for evacuation centers
        data.forEach((center) => {
            const marker = L.marker([center.lat, center.lng], {
                icon: svgIcon,
                draggable: false,
            }).addTo(pinsLayer).bindPopup(center.name);
        });

        // Automatically calculate and add routing once data is fetched
        navigator.geolocation.getCurrentPosition(function (position) {
            const userLat = position.coords.latitude;
            const userLng = position.coords.longitude;

            calculateAndAddRouting(userLat, userLng, data);
        });
    })
    .catch(error => {
        console.error('Error fetching data:', error);
    });

// Fit the map to the pins after adding markers
pinsLayer.on('add', function () {
    const bounds = pinsLayer.getBounds();
    mymap.fitBounds(bounds);
});

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