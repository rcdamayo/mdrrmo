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
    <title>Disaster Ready Admin: About Us</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/admin-about.css">
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
    <a href="logout.php">
      <br>Logout
    </a>

    <a href="reports-flood.php">
      <div class="navcont">
        <br>Reports
      </div>
    </a>

    <a href="admin-map.php">
      <div class="navcont">
        <br>Map
      </div>
    </a>

    <a href="admin-population.php">
      <div class="navcont">
        <br>Population
      </div>
    </a>

    <a href="admin-about.php" class="active">About</a>
    <a href="admin-sms.php">SMS</a>
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

  <div class="top-about">
      <div class="top-about-h3">About Us</div>
      <div class="top-about-p">MUNICIPAL DISASTER RISK REDUCTION & MANAGEMENT OFFICE</div>
    </div>
<div class="main">
    


<!-- <form id='editForm' onsubmit='updateOrg()' method='POST' action='update_about.php'> -->
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
$sql = "SELECT * FROM employees"; // Replace with your table name
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

<form id='editForm' method='post'>
  <h1>UPDATE ORGANIZATIONAL CHART</h1>
    <button type='button' class="update-orgchart" onclick='updateOrg()'>CONFIRM</button>
<div class="container">
    <div class="box">
        <?php
        if (isset($rows[0])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[0]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[0]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[0]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[0]["position2"] . "'>";
        }
        ?>
    </div>
    <div class="vertical-line"></div>
    <div class="box">
        <?php
        if (isset($rows[1])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[1]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[1]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[1]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[1]["position2"] . "'>";
        }
        ?>
    </div>


<div class="container2">
    <div class="box">
        <?php
        if (isset($rows[2])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[2]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[2]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[2]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[2]["position2"] . "'>";
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[3])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[3]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[3]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[3]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[3]["position2"] . "'>";
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[4])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[4]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[4]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[4]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[4]["position2"] . "'>";
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
          echo "<input type='hidden' name='id[]' value='" . $rows[5]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[5]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[5]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[5]["position2"] . "'>";
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[6])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[6]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[6]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[6]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[6]["position2"] . "'>";
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[7])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[7]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[7]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[7]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[7]["position2"] . "'>";
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[8])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[8]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[8]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[8]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[8]["position2"] . "'>";
        }
        ?>
    </div>
</div>

<div class="container2" style="width: 60%;">
    <div class="box">
        <?php
        if (isset($rows[9])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[9]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[9]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[9]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[9]["position2"] . "'>";
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[10])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[9]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[9]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[9]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[9]["position2"] . "'>";
        }
        ?>
    </div>
    <div class="horizontal-line"></div>
    <div class="box">
        <?php
        if (isset($rows[11])) {
          echo "<input type='hidden' name='id[]' value='" . $rows[10]["id"] . "'>";
          echo "<input type='text' name='employee_name[]' value='" . $rows[10]["employee_name"] . "'>";
          echo "<input type='text' class='position' name='position[]' value='" . $rows[10]["position"] . "'>";
          echo "<input type='text' class='position' name='position2[]' value='" . $rows[10]["position2"] . "'>";
        }
        ?>
    </div>
</div>
</div>

<div class="elbow1"></div>
<div class="elbow2"></div>
  </div>

      </form>

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

    function updateOrg() {
        var form = document.getElementById("editForm");
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_about.php", true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    var response = xhr.responseText.trim();
                    if (response.includes('Error')) {
                        showSnackbar("Error updating records");
                    } else {
                        showSnackbar("Records updated successfully");
                    }
                } else {
                    showSnackbar("Error updating records");
                }
            }
        };
        xhr.send(formData);
    }

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
</script>
</body>
</html>
