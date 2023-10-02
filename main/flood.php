<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Ready: Flood Advisories</title>
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/flood.css">
  <link rel="icon" href="../images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
<div class="topnav" id="myTopnav">
  <img src="../images/icon.png">
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
    echo "<table><tr><th>Barangay</th><th>Status</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td style='font-weight: 600;'>" . $row["barangay"] . "</td><td>" . $row["status"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No results found";
}

$conn->close();
?>

            
        </div>


    </div>

    <div class="division">
      <div class="legend-container">
            <ul id="legend"></ul>
        </div>

    <div class="water-level">
        <h2>WATER LEVEL (m)</h2>
        
        
        <select id="tableSelect">
            <?php
            // Establish a database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "water_level";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            // Check the connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve table names (assuming each table corresponds to a barangay)
            $sql = "SHOW TABLES FROM $dbname";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $tableName = $row["Tables_in_water_level"];
                    echo "<option value='$tableName'>$tableName</option>";
                }
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </select>
        <div class="chart-container">
            <canvas id="yearlyGraph" width="500px" height="200px"></canvas>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('yearlyGraph').getContext('2d');
        var chart;
        var data = {}; // Store data retrieved from the server

        function updateChart(selectedTable) {
            // Send an AJAX request to fetch data for the selected table
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    data = JSON.parse(this.responseText);
                    createChart();
                }
            };
            xhttp.open("GET", "getData.php?tableName=" + selectedTable, true);
            xhttp.send();
        }

        function createChart() {
            if (chart) {
                chart.destroy(); // Destroy the existing chart if it exists
            }

            var customLabels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

            var datasets = [];
            var colors = generateRandomColors(Object.keys(data).length);

            var index = 0;
            var legendHTML = '';
            for (var year in data) {
                var dataValues = data[year];
                var color = colors[index];
                datasets.push({
                    label: year,
                    data: dataValues,
                    borderColor: color,
                    pointBackgroundColor: color,
                    pointRadius: 4,
                    fill: false,
                    tension: 0.4, // Adjust the tension for curved lines
                });

                // Create legend item with colored square
                legendHTML += '<li><span class="legend-color" style="background-color:' + color + '"></span>' + year + '</li>';
                
                index++;
            }

            // Update legend
            document.getElementById('legend').innerHTML = legendHTML;

            chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: customLabels,
                    datasets: datasets
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            grid: {
                                display: true,
                                drawBorder: false,
                            },
                            ticks: {
                                color: 'white'
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false, // Hide default legend
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ' - ' + context.raw;
                                }
                            }
                        }
                    }
                }
            });
        }

        function generateRandomColors(count) {
            var colors = [];
            for (var i = 0; i < count; i++) {
                colors.push(getRandomColor());
            }
            return colors;
        }

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        var tableSelect = document.getElementById('tableSelect');
        tableSelect.addEventListener('change', function () {
            var selectedTable = tableSelect.value;
            updateChart(selectedTable);
        });

        // Initialize the chart with the first table name
        var initialTable = tableSelect.options[0].value;
        updateChart(initialTable);
    </script>




</div>
</div>

<div class="footer">
  <div class="foot-txt">
  <img src="../images/footer.png" style="height: 100%; width: 80%;">
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