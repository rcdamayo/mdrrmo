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
  <link rel="stylesheet" href="css/reports-flood.css">
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
    
    <div class="dropdown">
    <?php
    // Assuming you have stored the logged-in user's ID in a session variable named $_SESSION['id']
    if(isset($_SESSION['id'])){
        $logged_in_id = $_SESSION['id'];

        include 'db_connection.php';

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

    <a href="reports-flood.php" class="active">
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
    <a href="admin-about.php">About</a>
    <a href="admin-email.php">Email</a>
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
  <p style="word-spacing: 10px;">
    <b>Flood</b> | <a href="reports-typhoon.php">Typhoon</a>
  </p>

  <p style="margin-top: 7%;">
    Number of families and individuals, according to age and health condition, who are at risk of any type of risk or hazard
  </p>

  <br>
  <p style="margin-top: 8.5%; font-style: italic; font-size: 12px;">
    Example: Storm Surge in every Sitio/Purok/Zone/Block/Street
  </p>

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
        
  <div class="textarea-wrapper-row" style="margin-top: 1.6em;">
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
          <input type="number" name="adult2M">

        <div class="placeholder" style="left: 50%;">Female</div>
          <input type="number" name="adult2F">
      </div>
    </div>
    </div>
 

  <div class="textarea-wrapper" style="width: 42%; margin-left: 0.1em; margin-top: 1.6em; padding: 0;">
    <div class="identifier">Pregnant Women</div>
    <div class="outer-wrapper">
      <div class="textarea-wrapper">
        <input type="number" name="pregnant" style="width: 50%; margin-top: 0em;margin-right: 0;">
      </div>
    </div>
  </div>
  <div class="buttons-container">
  <button type="submit" value="Add Flood Report" id="done">Done</button>
  <button type="button" id="print" onclick="exportTableToExcel('table.xls')">Save as Excel</button>
  </div>
  </div> 

</form>
</div>
</div>

<div class="main" style="display: flex; justify-content: center;">
<?php
include 'db_connection.php';

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
    echo "<table style='border-collapse: collapse; table-layout:auto; border: 1px solid black;'>";
            echo "<tr style='font-size: 14px;background-color:#f9b314; height: 100px;'>
                <th rowspan='3' style='font-weight: 700; text-align: center;padding: 8px;border: 1px solid black; min-width: 10em;'>Sitio / Purok / Zone / Block / Street</th>
                <th rowspan='3' style='font-weight: 700; text-align: center;padding: 8px;border: 1px solid black;'>No. of Families</th>
                <th rowspan='2' style='font-weight: 700; text-align: center;padding: 8px;border: 1px solid black;' colspan='3'>No. of Persons</th>
                <th colspan='10' style='font-weight: 700; text-align: center;padding: 8px;border: 1px solid black;'>Children (Age 17 and Below)</th>
                <th colspan='4' style='font-weight: 700; text-align: center;padding: 8px;border: 1px solid black;'>Adult</th>
                <th rowspan='2' style='font-weight: 700; text-align: center;padding: 8px;border: 1px solid black;' colspan='2'>Persons with Disabilities</th>
                <th rowspan='2' style='font-weight: 700; text-align: center;padding: 8px;border: 1px solid black;' colspan='2'>Persons with Diseases (All Ages)</th>
                <th rowspan='3' style='font-weight: 700; text-align: center;padding: 8px;border: 1px solid black;'>Pregnant Women</th>
                
            </tr>
            <tr style='font-size: 14px;'>
              <th style='width: 100px; height: 50px; text-align: center;border: 1px solid black;' scope='col' colspan='2'>0-6 mos</th>
              <th style='width: 100px; height: 50px; text-align: center;border: 1px solid black;' scope='col' colspan='2'>7 mos to 2 y/o</th>
              <th style='width: 100px; height: 50px; text-align: center;border: 1px solid black;' scope='col' colspan='2'>3-5 y/o</th>
              <th style='width: 100px; height: 50px; text-align: center;border: 1px solid black;' scope='col' colspan='2'>6-12 y/o</th>
              <th style='width: 100px; height: 50px; text-align: center;border: 1px solid black;' scope='col' colspan='2'>13-17 y/o</th>
              <th style='width: 100px; height: 50px; text-align: center;border: 1px solid black;' scope='col' colspan='2'>18-59 y/o</th>
              <th style='width: 100px; height: 50px; text-align: center;border: 1px solid black;' scope='col' colspan='2'>60 y/o and above</th>
            </tr>
            
            <tr>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;font-size: 8px;' scope='col'>LGBTQ+</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>M</th>
              <th style='width: 50px; text-align: center;border: 1px solid black;' scope='col'>F</th>
            </tr>";

            foreach ($totals as $totalRow) {
              echo "<tr>
                  <td style='text-align: center;'>".$totalRow['sitio']."</td>
                  <td style='text-align: center;'>".$totalRow['families']."</td>
                  <td style='text-align: center;'>".$totalRow['persons_m']."</td>
                  <td style='text-align: center;'>".$totalRow['persons_f']."</td>
                  <td style='text-align: center;'>".$totalRow['persons_lgbt']."</td>
                  <td style='text-align: center;'>".$totalRow['children1_m']."</td>
                  <td style='text-align: center;'>".$totalRow['children1_f']."</td>
                  <td style='text-align: center;'>".$totalRow['children2_m']."</td>
                  <td style='text-align: center;'>".$totalRow['children2_f']."</td>
                  <td style='text-align: center;'>".$totalRow['children3_m']."</td>
                  <td style='text-align: center;'>".$totalRow['children3_f']."</td>
                  <td style='text-align: center;'>".$totalRow['children4_m']."</td>
                  <td style='text-align: center;'>".$totalRow['children4_f']."</td>
                  <td style='text-align: center;'>".$totalRow['children5_m']."</td>
                  <td style='text-align: center;'>".$totalRow['children5_f']."</td>
                  <td style='text-align: center;'>".$totalRow['adult1_m']."</td>
                  <td style='text-align: center;'>".$totalRow['adult1_f']."</td>
                  <td style='text-align: center;'>".$totalRow['adult2_m']."</td>
                  <td style='text-align: center;'>".$totalRow['adult2_f']."</td>
                  <td style='text-align: center;'>".$totalRow['disabilities_m']."</td>
                  <td style='text-align: center;'>".$totalRow['disabilities_f']."</td>
                  <td style='text-align: center;'>".$totalRow['diseases_m']."</td>
                  <td style='text-align: center;'>".$totalRow['diseases_f']."</td>
                  <td style='text-align: center;'>".$totalRow['pregnant']."</td>
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
<script>
  function exportTableToExcel(filename) {
    var filename = "MDRRMO_Flood_Report.xls";
    var table = document.querySelector('table');
    var uri = 'data:application/vnd.ms-excel;base64,';
    var template =
      '<html xmlns:x="urn:schemas-microsoft-com:office:excel">' +
      '<head>' +
      '<!--[if gte mso 9]>' +
      '<xml>' +
      '<x:ExcelWorkbook>' +
      '<x:ExcelWorksheets>' +
      '<x:ExcelWorksheet>' +
      '<x:Name>Sheet 1</x:Name>' +
      '<x:WorksheetOptions>' +
      '<x:DisplayGridlines/>' +
      '</x:WorksheetOptions>' +
      '</x:ExcelWorksheet>' +
      '</x:ExcelWorksheets>' +
      '</x:ExcelWorkbook>' +
      '</xml>' +
      '<![endif]-->' +
      '</head>' +
      '<body>' +
      '<table>' + table.innerHTML + '</table>' +
      '</body>' +
      '</html>';
    var base64 = function(s) {
      return window.btoa(unescape(encodeURIComponent(s)));
    };
    var link = document.createElement('a');
    link.download = filename; // Change the filename here
    link.href = uri + base64(template);
    link.click();
  }
</script>


</body>
</html>


  
