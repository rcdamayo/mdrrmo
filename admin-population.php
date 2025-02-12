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
    <title>Disaster Ready Admin: Population</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/admin-population.css">
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

    <a href="admin-population.php" class="active">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
        </svg>
        <br>Population
      </div>
    </a>

    
    <a href="admin-about.php">About</a>
    <a href="admin-contact.php">Contact</a>
    <a href="admin-typhoon.php">Typhoon</a>
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

<div class="main">

<!-- POPULATION DATA -->
  <div class="division">

  <div class="modal-cont">
    <button onclick='openModal()'>IMPORT CSV</button>
  </div>

  <?php
include 'db_connection.php';

// Fetch hazard-prone area data from the database
$sql = "SELECT * FROM population_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form id='editPopulation' onsubmit='submitForm(event)' method='post'>";
    echo "<h2 class='population-header'>POPULATION DATA</h2>";
    echo "<button type='button' class='update-year' onclick='addYearData()'>ADD YEAR</button>";
    echo "<button type='submit' class='update-population'>UPDATE</button>";
    echo "<div class='population-container'>";
    echo "<table class='population-table'>";
    // Output the header row with the years
    echo "<tr><th>Barangay</th>"; // Empty cell for the corner
    while ($row = $result->fetch_assoc()) {
        echo "<th><input type='text' name='years[]' value='" . $row['year'] . "'></th>";
        echo "<input type='hidden' name='original_years[]' value='" . $row['year'] . "'>";
        // echo "<th>" . $row['year'] . "</th>";
    }
    echo "</tr>";

    // Reset the result set pointer
    $result->data_seek(0);

    // Get the list of column names excluding 'id' and 'year'
    $columns = [];
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            if ($key !== 'id' && $key !== 'year' && !in_array($key, $columns)) {
                $columns[] = $key;
            }
        }
    }

    // Output the data rows
    foreach ($columns as $columnName) {
        echo "<tr>";
        echo "<td>" . $columnName . "</td>";

        $result->data_seek(0); // Resetting the result set pointer for years
        // Output the year-wise data for the current column
        while ($rowYear = $result->fetch_assoc()) {
            echo "<td><input type='text' name='{$columnName}[]' value='{$rowYear[$columnName]}'></td>";
        }

        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "0 results";
}
$conn->close();
?>
</form>
</div>

<div id="snackbar"></div>

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <form action="upload_csv.php" method="post" enctype="multipart/form-data">
        <label for="csvFile">Choose a CSV file:</label><br>
        <input type="file" name="csvFile" id="csvFile" accept=".csv">
        <button type="submit" name="submit">Upload</button>
    </form>
</div>

<!-- The overlay background -->
<div id="overlay" class="overlay"></div>

  

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


    function submitForm(event) {
        event.preventDefault();
        var form = document.getElementById("editPopulation");
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_population.php", true);
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

    function addYearData() {
    // Prompt the user for the year value
    var yearValue = prompt("Enter the year value:");

    if (yearValue !== null && yearValue !== "") {
        // Assume you have an API endpoint to update the database
        var apiUrl = 'add_year.php';

        // Create a FormData object and append the yearValue
        var formData = new FormData();
        formData.append('yearValue', yearValue);

        // Send a POST request to the server to update the database
        fetch(apiUrl, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            // Check the response from the server
            if (data.success) {
                // If the update was successful, inform the user
                alert("Year data added successfully.");

                // Reload the page
                location.reload();
            } else {
                // If there was an error, inform the user
                alert("Error adding year data. Please try again.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("An error occurred. Please try again later.");
        });
    }
}

// Function to open the modal
function openModal() {
        document.getElementById("myModal").style.display = "block";
        document.getElementById("overlay").style.display = "block";
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
        document.getElementById("overlay").style.display = "none";
    }



    </script>

</div>

  <div class="division">

<!-- HOUSEHOLD DATA -->
    <div class="div-cont">
        <?php
    include 'db_connection.php';

    // Fetch hazard-prone area data from the database
    $sql = "SELECT * FROM household_data";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<form id='editHousehold' onsubmit='submitForm(event)' method='post' action='update_household.php'>";
        echo "<h2 class='ageGroup-header'>HOUSEHOLD DATA</h2>";
        echo "<button type='submit' class='submit-prone' onclick='updateHousehold()'>UPDATE</button>";

        echo "<div class='household-container'>";
        echo "<table class='household-table'>
                <tr>
                    <th>Year</th>
                    <th>Household Population</th>
                    <th>No. of Households</th>
                    <th>Average Household Size</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td style='font-weight: 600;'><input type='text' name='year[]' value='" . $row["year"] . "'></td>
                <td><input type='text' name='household_population[]' value='" . $row["household_population"] . "'></td>
                <td><input type='text' name='no_of_households[]' value='" . $row["no_of_households"] . "'></td>
                <td><input type='text' name='average_household_size[]' value='" . $row["average_household_size"] . "'></td>
                <input type='hidden' name='id[]' value='" . $row["id"] . "'>
            </tr>";
        }

        echo "</table>";
        echo '<button type="button" class="add-row" onclick="addRow()">ADD ROW</button>';
        echo "</form>";
    } else {
        echo "No results found";
    }

    $conn->close();
?>

        </div>

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


    function updateHousehold() {
    var form = document.getElementById("editHousehold");
    event.preventDefault();
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_household.php", true);
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

var cells = document.querySelectorAll("td input");
cells.forEach(function(cell) {
    cell.setAttribute("contentEditable", true);
});

function addRow() {
    var tables = document.getElementsByClassName('household-table');
    var table = tables[0]; // Assuming the first table with the class "map-markers-table"

    var newRow = table.insertRow(-1);

    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    var cell3 = newRow.insertCell(2);
    var cell4 = newRow.insertCell(3);

    cell1.innerHTML = "<input type='text' name='new_year[]' value=''>";
    cell2.innerHTML = "<input type='text' name='new_household_population[]' value=''>";
    cell3.innerHTML = "<input type='text' name='new_no_of_households[]' value=''>";
    cell4.innerHTML = "<input type='text' name='new_average_household_size[]' value=''>";
    
}
</script>


<?php
include 'db_connection.php';

// Fetch hazard-prone area data from the database
$sql = "SELECT * FROM age_group";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form id='editAgeGroup' onsubmit='updateAgeGroup(event)' method='post'>";
    echo "<h2 class='ageGroup-header'>AGE GROUP DATA</h2>";
    echo "<button type='submit' class='submit-ageGroup'>UPDATE</button>";
    echo "<div class='ageGroup-container'>";
    echo "<table class='ageGroup-table'>";
    echo "<tr>
            <th>Age Group</th>
            <th>Population (2015)</th>
            <th>Age Group Percentage</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['age_group'] . "</td>";
        echo "<td><input type='text' name='population_2015[]' value='" . $row['population_2015'] . "'></td>";
        echo "<td><input type='text' style='width: 5em;' name='age_percentage[]' value='" . $row['age_percentage'] . "'> %</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
} else {
    echo "0 results";
}
$conn->close();
?>


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


    function updateAgeGroup(event) {
        event.preventDefault();
        var form = document.getElementById("editAgeGroup");
        var formData = new FormData(form);

        var xhr = new XMLHttpRequest();
        xhr.open("POST", "update_ageGroup.php", true);
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



</body>
</html>