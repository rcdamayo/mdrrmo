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
                          <a href='logs.php' style='height: 3em;width: 14em; padding: 0; border-top: 1px solid #e5a920; font-size: 12px;'>
                            <p>Logs</p>
                          </a>
                            
                          <a href='logout.php' style='margin-top: 3em;height: 3em;width: 14em; padding: 0; border-top: 1px solid #e5a920; font-size: 12px;'>
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
    <a href="admin-contact.php">Contact</a>
    <a href="admin-typhoon.php" class="active">Typhoon</a>
    <a href="admin-flood.php">Flood</a>
    
    <!-- <div class="dropdown2">
      <button class="dropbtn2">Typhoon<i class='fa fa-caret-down' style='margin-left: 1em;'></i></button>
        <div class="dropdown-content2">
          <a href="admin-typhoon.php">Typhoon Data</a>
          <a href="admin-typhoon-adv.php" style='margin-top: 3em;'>Typhoon Advisories</a>
        </div>
    </div>
    
    <div class="dropdown2">
      <button class="dropbtn2">Flood<i class='fa fa-caret-down' style='margin-left: 1em;'></i></button>
        <div class="dropdown-content2">
          <a href="admin-flood.php">Flood Data</a>
          <a href="admin-flood-adv.php" style='margin-top: 3em;'>Flood Advisories</a>
        </div>
    </div> -->

    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // First Dropdown
    var dropdown1 = document.querySelector(".dropdown");
    dropdown1.addEventListener("hover", function() {
      var dropdownContent = dropdown1.querySelector(".dropdown-content");
      dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    });

    // Second Dropdown
    var dropdown2 = document.querySelector(".dropdown2");
    dropdown2.addEventListener("hover", function() {
      var dropdownContent = dropdown2.querySelector(".dropdown-content2");
      dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
    });
  });
</script>

<iframe src="https://earth.nullschool.net/#current/wind/surface/level/orthographic=123.55,11.87,1751/loc=124.750,11.305" width="100%" height="590px" frameborder="0"></iframe>

  <form action="store_alert-typhoon.php" method="post" onsubmit="submitForm(event)">
  <div class="early-alert" id="alertContainer">

    <div class="radio-container">
        <label class="container">
            <input type="radio" name="alert_level" value="yellow" checked onclick="changeAlertClass('alert-yellow')">
            <span class="checkmark1"></span>
        </label>
        
        <label class="container">
            <input type="radio" name="alert_level" value="orange" onclick="changeAlertClass('alert-orange')">
            <span class="checkmark2"></span>
        </label>
        
        <label class="container">
            <input type="radio" name="alert_level" value="red" onclick="changeAlertClass('alert-red')">
            <span class="checkmark3"></span>
        </label>
    </div>

    <h3>EMERGENCY ALERT & WARNING</h3>
    <input class="early-alert-btn" type="submit" value="DONE">
    <div class="alert-message">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#f9b314" viewBox="0 0 256 256" style="position: absolute; top: 40%; left: 5%;">
            <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM120,104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm8,88a12,12,0,1,1,12-12A12,12,0,0,1,128,192Z"></path>
        </svg>
        <p><textarea id="alert_message" name="alert_message" placeholder="Enter Emergency Alert/Warning Message here." onkeydown="if(event.keyCode === 13){if(!event.shiftKey){this.value += '\n'; event.preventDefault();}}"></textarea></p>
            
        <!-- HTML for the clickable icon and hidden file input -->
        <div id="file-icon" onclick="chooseFile()">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
            <path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V158.75l-26.07-26.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L40,149.37V56ZM40,172l52-52,80,80H40Zm176,28H194.63l-36-36,20-20L216,181.38V200ZM144,100a12,12,0,1,1,12,12A12,12,0,0,1,144,100Z"></path>
          </svg>
        </div>
        <input type="file" id="file-input" name="alert_image" accept="image/*" style="display: none;">

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
        location.reload();
    }, 300);
}

function changeAlertClass(newClass) {
    var alertContainer = document.getElementById('alertContainer');
    alertContainer.className = 'early-alert ' + newClass;

    // Update the SVG fill color
    var svg = document.querySelector('.early-alert svg');
    var fillColor;

    switch (newClass) {
        case 'alert-yellow':
            fillColor = '#ffcc00';
            break;
        case 'alert-orange':
            fillColor = '#ff6600';
            break;
        case 'alert-red':
            fillColor = '#cc0000';
            break;
        default:
            fillColor = '#ffff00'; // Default fill color
    }

    svg.setAttribute('fill', fillColor);
}

// Function to trigger the file input click
function chooseFile() {
    document.getElementById('file-input').click();
  }

  // Optional: Display the selected file name
  document.getElementById('file-input').addEventListener('change', function() {
    var fileName = this.files[0].name;
    alert('Selected file: ' + fileName);
  });
</script>
    <div id="snackbar"></div>
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
  $wind_speed = $row["wind_speed"];
  $gust = $row["gust"];
  $updated_on = $row["updated_on"];
} else {
  $int_name = "N/A";
  $local_name = "N/A";
  $wind_speed = "N/A";
  $gust = "N/A";
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
        <td>Wind Speed:</td>
        <td><input type="number" name="wind_speed" id="wind_speed" placeholder="<?php echo $wind_speed; ?> km/h"></td>
      </tr>

      <tr>
        <td>Gustiness:</td>
        <td><input type="number" name="gust" id="gust" placeholder="<?php echo $gust; ?> km/h"></td>
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
        location.reload();
    }, 300);
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