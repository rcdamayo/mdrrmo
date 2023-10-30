<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Ready: Population</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/population.css">
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
<div class="topnav" id="myTopnav">
  <img src="images/icon.png">
    <div class="topcont">
      <div class="p1">Republic of the Philippines</div>
      <div class="p2">Municipality of Barugo</div>
      <div class="p3">MDRRMO</div>
    </div>
    <a href="login.php" style="width: 70px; padding-left: 2%;">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24ZM74.08,197.5a64,64,0,0,1,107.84,0,87.83,87.83,0,0,1-107.84,0ZM96,120a32,32,0,1,1,32,32A32,32,0,0,1,96,120Zm97.76,66.41a79.66,79.66,0,0,0-36.06-28.75,48,48,0,1,0-59.4,0,79.66,79.66,0,0,0-36.06,28.75,88,88,0,1,1,131.52,0Z"></path>
      </svg>
      <br>Login
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

    <a href="population.php" class="active">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
        </svg>
        <br>Population
      </div>
    </a>

    <a href="about.php">About</a>
    <a href="typhoon.php">Typhoon</a>
    <a href="flood.php">Flood</a>
    <a href="weather.php">Weather</a>
    <a href="index.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
    <div class="division">
        <h4>Content</h4>
        <p style="word-spacing: 10px;">
        <b>Barangay</b> | <a href="demographics.php">Demographics</a></p>

        <p style="margin-top: 20px;">
        <b>Barugo</b> is a coastal municipality in the province of Leyte.</p>

        <p style="margin-top: 20px;">
        The municipality has a land area of 84.62 square kilometers or 32.67 square miles which constitutes 1.34% of Leyte's total area. Its population as determined by the 2020 Census was 34,497. This represented 1.94% of the total population of Leyte province, or 0.76% of the overall population of the Eastern Visayas region. Based on these figures, the population density is computed at 408 inhabitants per square kilometer or 1,056 inhabitants per square mile.
        </p>

        <?php
include 'db_connection.php';

echo "<div class='table-container'>";
echo "<table>";
echo "<tr><th>Barangay</th><th>Population (2015)</th><th>Population (2020)</th><th>Population Change (2015-2020)</th><th>Annual Population Growth Rate (2015-2020)</th></tr>";

$sql = "SELECT * FROM population_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $populationChange = $row['population_change'];
        $rate = $row['rate'];

        // Determine the font color and arrow icon based on the sign of the values
        $populationChangeColor = $populationChange >= 0 ? 'green' : 'red';
        $populationChangeArrow = $populationChange >= 0 ? '&#9650;' : '&#9660;';
        $rateColor = $rate >= 0 ? 'green' : 'red';
        $rateArrow = $rate >= 0 ? '&#9650;' : '&#9660;';

        echo "<tr>
                <td>{$row['barangay']}</td>
                <td>{$row['population_2015']}</td>
                <td>{$row['population_2020']}</td>
                <td style='color: $populationChangeColor'>$populationChangeArrow {$row['population_change']} %</td>
                <td style='color: $rateColor'>$rateArrow {$row['rate']} %</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No data available</td></tr>";
}

echo "</table>";
echo "</div>";

// Close the database connection
$conn->close();
?>



    </div>

    <div class="division">
        <div class="summary-container">
          <h3>Summary Data</h3>
          <div class="summary-row">
            <div class="summary">
              Type
            </div>

            <div class="summary" style="text-align:right;">
              Municipality
            </div>
          </div>

          <div class="summary-row">
            <div class="summary">
              Island Group
            </div>

            <div class="summary" style="text-align:right;">
              Visayas
            </div>
          </div>

          <div class="summary-row">
            <div class="summary">
              Region
            </div>

            <div class="summary" style="text-align:right;">
              VIII
            </div>
          </div>

          <div class="summary-row">
            <div class="summary">
              Province
            </div>

            <div class="summary" style="text-align:right;">
              Leyte
            </div>
          </div>

          <div class="summary-row">
            <div class="summary">
              Postal Code
            </div>

            <div class="summary" style="text-align:right;">
              6519
            </div>
          </div>

          <div class="summary-row">
            <div class="summary">
              Area (2013)
            </div>

            <div class="summary" style="text-align:right;">
              84.62 km2
              <br>
              (32.67 sq mi)
            </div>
          </div>

          <div class="summary-row">
            <div class="summary">
              Population (2020)
            </div>

            <div class="summary" style="text-align:right;">
              34,497
            </div>
          </div>

          <div class="summary-row">
            <div class="summary">
              Density (2020)
            </div>

            <div class="summary" style="text-align:right;">
              408 / km2
              <br>
              (1,056 / sq mi)
            </div>
          </div>

          <div class="summary-row">
            <div class="summary">
              Coordinates
            </div>

            <div class="summary" style="text-align:right;">
              11&deg; 19' North, 124&deg; 44' East
              <br>
              (11.3249, 124.7370)
            </div>
          </div>





        </div>
    </div>
</div>

    <div class="division" style="padding: 30px;">

    <div class="population">
      <div class="graph-container">
        <select id="yearSelect">
          <option value="2015">Population as of 2015</option>
          <option value="2020">Population as of 2020</option>
        </select>
        <canvas id="populationGraph" style="width: 100%; height: 90%; overflow-x: auto;"></canvas>
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
// GRAPH
document.addEventListener('DOMContentLoaded', function() {
  var ctx = document.getElementById('populationGraph').getContext('2d');
  var chart;

  function updateChart(selectedYear) {
    // Use fetch to get data from the PHP script
    fetch('fetch_population_data.php')
      .then(response => response.json())
      .then(data => {
        var selectedData = data;
        var barangays = selectedData.map(entry => entry.barangay);
        var populations = selectedData.map(entry => selectedYear === '2015' ? entry.population_2015 : entry.population_2020);

        if (chart) {
          chart.data.labels = barangays;
          chart.data.datasets[0].data = populations;
          chart.update();
        } else {
          chart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: barangays,
              datasets: [{
                label: 'Population',
                data: populations,
                backgroundColor: '#043a87',
                borderWidth: 1,
              }]
            },
            options: {
              responsive: true,
              scales: {
                x: {
                  position: 'bottom',
                  ticks: {
                    autoSkip: false,
                    maxRotation: 90, // Adjust the angle as needed
                    minRotation: 30, // You can also set this to 45 if desired
                    color: 'black',
                    font: {
                      size: 8
                    }
                  }
                },
                y: {
                  ticks: {
                    color: 'black',
                    font: {
                      size: 10
                    }
                  }
                }
              },
              plugins: {
                legend: {
                  display: false
                },
                tooltip: {
                  callbacks: {
                    label: function(context) {
                      return 'Population: ' + context.parsed.y;
                    }
                  }
                },
                datasets: {
                  bar: {
                    barPercentage: 0.8, // Adjust the width of the bars (0.8 means 80% of available space)
                    categoryPercentage: 1 // Adjust the space between the bars
                  }
                }
              }
            }
          });
        }
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  }

  updateChart('2015');

  var yearSelect = document.getElementById('yearSelect');
  yearSelect.addEventListener('change', function() {
    var selectedYear = yearSelect.value;
    updateChart(selectedYear);
  });
});

</script>


















</div>
</body>
</html>