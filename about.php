<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Ready: Official Website of MDRRMO Barugo</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/about.css">
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
    <a href="" style="width: 70px; display: none;">
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
        <br>Map
      </div>
    </a>

    <a href="population.php">
      <div class="navcont">
        <br>Population
      </div>
    </a>

    <a href="about.php" class="active">About</a>
    <a href="typhoon.php">Typhoon</a>
    <a href="flood.php">Flood</a>
    <a href="weather.php">Weather</a>
    <a href="index.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

    <div class="top-about">
      <div class="top-about-h3">About Us</div>
      <div class="top-about-p">MUNICIPAL DISASTER RISK REDUCTION & MANAGEMENT OFFICE</div>
    </div>
<div class="main">
    

<?php
// Database connection parameters
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$database = "disaster_ready"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetching all rows from the table
$sql = "SELECT * FROM org_chart"; // Replace with your table name
$result = $conn->query($sql);

// Array to hold the rows
$rows = array();

// Storing all rows in the array
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>

<div class="container">
    <div class="box">
        <?php
        if (isset($rows[0])) {
            echo '<p>' . $rows[0]["employee_name"] . '</p>';
            echo '<p>' . $rows[0]["position"] . '</p>';
            echo '<p>' . $rows[0]["position2"] . '</p>';
        }
        ?>
    </div>
    <div class="vertical-line"></div>
    <div class="box">
        <?php
        if (isset($rows[1])) {
            echo '<p>' . $rows[1]["employee_name"] . '</p>';
            echo '<p>' . $rows[1]["position"] . '</p>';
            echo '<p>' . $rows[1]["position2"] . '</p>';
        }
        ?>
    </div>


<div class="container2">
    <div class="box">
        <?php
        if (isset($rows[2])) {
            echo '<p>' . $rows[2]["employee_name"] . '</p>';
            echo '<p>' . $rows[2]["position"] . '</p>';
            echo '<p>' . $rows[2]["position2"] . '</p>';
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[3])) {
            echo '<p>' . $rows[3]["employee_name"] . '</p>';
            echo '<p>' . $rows[3]["position"] . '</p>';
            echo '<p>' . $rows[3]["position2"] . '</p>';
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[4])) {
            echo '<p>' . $rows[4]["employee_name"] . '</p>';
            echo '<p>' . $rows[4]["position"] . '</p>';
            echo '<p>' . $rows[4]["position2"] . '</p>';

        }
        ?>
    </div>
</div>

<div class="vertical-line" style="height: 100px; margin-left: -49em; margin-top: 22em;"></div>
<div class="vertical-line" style="height: 100px; margin-left: 49em; margin-top: 22em;"></div>

<div class="container2">
    <div class="box">
        <?php
        if (isset($rows[5])) {
            echo '<p>' . $rows[5]["employee_name"] . '</p>';
            echo '<p>' . $rows[5]["position"] . '</p>';
            echo '<p>' . $rows[5]["position2"] . '</p>';
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[6])) {
            echo '<p>' . $rows[6]["employee_name"] . '</p>';
            echo '<p>' . $rows[6]["position"] . '</p>';
            echo '<p>' . $rows[6]["position2"] . '</p>';
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[7])) {
            echo '<p>' . $rows[7]["employee_name"] . '</p>';
            echo '<p>' . $rows[7]["position"] . '</p>';
            echo '<p>' . $rows[7]["position2"] . '</p>';
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[8])) {
            echo '<p>' . $rows[8]["employee_name"] . '</p>';
            echo '<p>' . $rows[8]["position"] . '</p>';
            echo '<p>' . $rows[8]["position2"] . '</p>';
        }
        ?>
    </div>
</div>

<div class="container2" style="width: 60%;">
    <div class="box">
        <?php
        if (isset($rows[9])) {
            echo '<p>' . $rows[9]["employee_name"] . '</p>';
            echo '<p>' . $rows[9]["position"] . '</p>';
            echo '<p>' . $rows[9]["position2"] . '</p>';
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[10])) {
            echo '<p>' . $rows[10]["employee_name"] . '</p>';
            echo '<p>' . $rows[10]["position"] . '</p>';
            echo '<p>' . $rows[10]["position2"] . '</p>';
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[11])) {
            echo '<p>' . $rows[11]["employee_name"] . '</p>';
            echo '<p>' . $rows[11]["position"] . '</p>';
            echo '<p>' . $rows[11]["position2"] . '</p>';
        }
        ?>
    </div>
</div>
</div>

<div class="elbow1"></div>
<div class="elbow2"></div>
  </div>


  <div class="footer" style="margin-top: 3rem;">
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

</body>
</html>