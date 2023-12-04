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

    
    <a href="admin-about.php" class="active">About</a>
    <a href="admin-contact.php">Contact</a>
    
    <div class="dropdown2">
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
    </div>

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

  <div class="top-about">
      <div class="top-about-h3">About Us</div>
      <div class="top-about-p">MUNICIPAL DISASTER RISK REDUCTION & MANAGEMENT OFFICE</div>
    </div>
<div class="main">
    


<!-- <form id='editForm' onsubmit='updateOrg()' method='POST' action='update_about.php'> -->
<?php
include "db_connection.php";

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

<form id='editForm' method='post'>
    <button type='button' class="update-orgchart" onclick='updateOrg()'>UPDATE</button>
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
</body>
</html>
