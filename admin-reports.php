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
  <title>Disaster Ready: Flood Reports</title>
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/reports.css">
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

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

    <a href="admin-reports.php" class="active">
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
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
  <p style="word-spacing: 10px;">
    <b>Flood</b> | <a href="admin-typhoon.php">Typhoon</a>
  </p>

  <p style="margin-top: 7%;">
    Number of families and individuals, according to age and health condition, who are at risk of any type of risk or hazard
  </p>

  <br>
  <p style="margin-top: 8.5%; font-style: italic; font-size: 12px;">
    Example: Storm Surge in every Sitio/Purok/Zone/Block/Street
  </p>

  <div id="print">Print</div>

<div class="division">
  <form action="flood_report.php" method="POST">
    <div class="textarea-wrapper">
      <div class="placeholder">
        Sitio/Purok/Zone/Block/Street
      </div>
      <input type="text" name="sitio" style="width: 100%; text-align: left;" required>
    </div>

    <div class="textarea-wrapper-row">
      <div class="textarea-wrapper">
        <div class="identifier">
          No. of Persons
        </div>
          <div class="placeholder">Male</div>
          <input type="number" name="personsM">

          <div class="placeholder" style="left: 37%;">Female</div>
          <input type="number" name="personsF">

          <div class="placeholder" style="left: 70%;">LGBTQ+</div>
          <input type="number" name="personsLgbt">
      </div>

      <div class="textarea-wrapper" style="width: 34%;">
        <div class="identifier">No. of Families</div>
        <input type="number" name="families" style="height: 40px; padding-top: 0px;">
      </div>
    </div>
    
    <div class="textarea-wrapper-row">
      <div class="textarea-wrapper">
        <div class="identifier">Persons with Disabilities</div>
        <div class="placeholder">Male</div>
        <input type="number" name="disabilitiesM">

        <div class="placeholder" style="left: 54%;">Female</div>
        <input type="number" name="disabilitiesF">
      </div>

    
      <div class="textarea-wrapper">
        <div class="identifier">Persons with Diseases (All Ages)</div>
        <div class="placeholder">Male</div>
        <input type="number" name="diseasesM">

        <div class="placeholder" style="left: 54%;">Female</div>
        <input type="number" name="diseasesF">
      </div>
    </div>
</div>

<div class="division">
  <div class="textarea-wrapper-row"> 
    <div class="identifier">Children (age 17 and below)</div>
    
      <div class="outer-wrapper">
        <div class="identifier2">0-6 months</div>
        <div class="placeholder">Male</div>
          <input type="number" name="children1M">

        <div class="placeholder" style="left: 50%;">Female</div>
          <input type="number" name="children1F">
      </div>  

      <div class="outer-wrapper">
        <div class="identifier2">7 mo to 2 y/o</div>
        <div class="placeholder">Male</div>
          <input type="number" name="children2M" style="width: 50%;">

        <div class="placeholder" style="left: 50%;">Female</div>
          <input type="number" name="children2F" style="width: 50%;">
      </div>

      <div class="outer-wrapper">
        <div class="identifier2">3 to 5 y/o</div>
        <div class="placeholder">Male</div>
          <input type="number" name="children3M" style="width: 50%;">

        <div class="placeholder" style="left: 50%;">Female</div>
          <input type="number" name="children3F" style="width: 50%;">
      </div>

      <div class="outer-wrapper">
        <div class="identifier2">6 to 12 y/o</div>
        <div class="placeholder">Male</div>
          <input type="number" name="children4M" style="width: 50%;">

        <div class="placeholder" style="left: 50%;">Female</div>
          <input type="number" name="children4F" style="width: 50%;">
      </div>

      <div class="outer-wrapper">
        <div class="identifier2">13 to 17 y/o</div>
        <div class="placeholder">Male</div>
          <input type="number" name="children5M" style="width: 50%;">

        <div class="placeholder" style="left: 50%;">Female</div>
          <input type="number" name="children5F" style="width: 50%;">
      </div>
  </div>
        
  <div class="textarea-wrapper-row" style="margin-top: 1.6em;width: 68%;">
    <div class="textarea-wrapper">
    <div class="identifier">Adult</div>

    <div class="outer-wrapper"> 
      <div class="textarea-wrapper">
        <div class="identifier2">18 - 59 y/o</div>
        <div class="placeholder">Male</div>
          <input type="number" name="adult1M">

        <div class="placeholder" style="left: 50%;">Female</div>
          <input type="number" name="adult1F">
      </div>
    </div>

    <div class="outer-wrapper">
      <div class="textarea-wrapper">
        <div class="identifier2">60 y/o and above</div>
        <div class="placeholder">Male</div>
          <input type="number" name="adult2M" style="width: 50%;">

        <div class="placeholder" style="left: 50%;">Female</div>
          <input type="number" name="adult2F" style="width: 50%;">
      </div>
    </div>
    </div>
 

  <div class="textarea-wrapper" style="width: 70%;">
    <div class="identifier">Pregnant Women</div>
    <div class="outer-wrapper">
      <div class="textarea-wrapper">
        <input type="number" name="pregnant" style="border-radius: 50px;">
      </div>
    </div>
  </div>
  </div> 


  <div class="textarea-wrapper-row" style="margin-top: -1.3em;">
    <button type="submit" value="Add Flood Report" id="done">Done</button>
  </div>
</form>
</div>
</div>

<div class="main" style="display: flex; justify-content: center;">
<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "disaster_ready";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data
$sql = "SELECT * FROM flood_report";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Associative array to store totals for each "sitio"
    $totals = array();

    // Loop through the data and calculate totals
    while ($row = $result->fetch_assoc()) {
        $sitio = $row['sitio'];
        if (!isset($totals[$sitio])) {
            $totals[$sitio] = $row; // Initialize with the first row data
        } else {
            // Add each column's value to the total
            foreach ($row as $key => $value) {
                if ($key != 'sitio') {
                    $totals[$sitio][$key] += $value;
                }
            }
        }
    }

    // Display the table
    echo '<div class="table-container">';
    echo "<table>";
            echo "<tr>
                <th rowspan='3' style='min-width: 200px;'>Sitio/Purok/Zone/Block/Street</th>
                <th rowspan='3' style='min-width: 100px;'>No. of Families</th>
                <th rowspan='2' colspan='3'>No. of Persons</th>
                <th colspan='10'>Children (Age 17 and Below)</th>
                <th colspan='4'>Adult</th>
                <th rowspan='2' colspan='2'>Persons with Disabilities</th>
                <th rowspan='2' colspan='2'>Persons with Diseases (All Ages)</th>
                <th rowspan='3' style='min-width: 100px;'>Pregnant Women</th>
                
            </tr>
            <tr>
              <th scope='col' colspan='2'>0-6 mos</th>
              <th scope='col' colspan='2'>7 mos to 2 y/o</th>
              <th scope='col' colspan='2'>3-5 y/o</th>
              <th scope='col' colspan='2'>6-12 y/o</th>
              <th scope='col' colspan='2'>13-17 y/o</th>
              <th scope='col' colspan='2'>18-59 y/o</th>
              <th scope='col' colspan='2'>60 y/o and above</th>
            </tr>
            
            <tr>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>LGBTQ+</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
              <th scope='col'>Male</th>
              <th scope='col'>Female</th>
            </tr>";

            foreach ($totals as $totalRow) {
              echo "<tr>
                  <td>".$totalRow['sitio']."</td>
                  <td>".$totalRow['families']."</td>
                  <td>".$totalRow['persons_m']."</td>
                  <td>".$totalRow['persons_f']."</td>
                  <td>".$totalRow['persons_lgbt']."</td>
                  <td>".$totalRow['disabilities_m']."</td>
                  <td>".$totalRow['disabilities_f']."</td>
                  <td>".$totalRow['diseases_m']."</td>
                  <td>".$totalRow['diseases_f']."</td>
                  <td>".$totalRow['children1_m']."</td>
                  <td>".$totalRow['children1_f']."</td>
                  <td>".$totalRow['children2_m']."</td>
                  <td>".$totalRow['children2_f']."</td>
                  <td>".$totalRow['children3_m']."</td>
                  <td>".$totalRow['children3_f']."</td>
                  <td>".$totalRow['children4_m']."</td>
                  <td>".$totalRow['children4_f']."</td>
                  <td>".$totalRow['children5_m']."</td>
                  <td>".$totalRow['children5_f']."</td>
                  <td>".$totalRow['adult1_m']."</td>
                  <td>".$totalRow['adult1_f']."</td>
                  <td>".$totalRow['adult2_m']."</td>
                  <td>".$totalRow['adult2_f']."</td>
                  <td>".$totalRow['pregnant']."</td>
              </tr>";
          }
      
          echo "</table>";
          echo '</div>';
      } else {
          echo "No data found.";
      }
      
      // Close the database connection
      $conn->close();
      ?>

</div>

</body>
</html>


  
