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