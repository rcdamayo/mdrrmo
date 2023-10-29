<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disaster Ready: Official Website of MDRRMO Barugo</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/script.js"></script>
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

    <a href="population.php">
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
    <a href="index.php" class="active">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">

  <div class="division">
  <?php
// Get the current year and month
$year = date('Y');
$month = date('m');

// Check if a different month is requested
if (isset($_GET['year']) && isset($_GET['month'])) {
    $year = $_GET['year'];
    $month = $_GET['month'];

    // Ensure $month always has two digits
    $month = str_pad($month, 2, '0', STR_PAD_LEFT);
}

// Calculate the previous and next months
$prevMonth = $month - 1;
$prevYear = $year;
if ($prevMonth == 0) {
    $prevMonth = 12;
    $prevYear--;
}
$nextMonth = $month + 1;
$nextYear = $year;
if ($nextMonth == 13) {
    $nextMonth = 1;
    $nextYear++;
}

// Get the number of days in the current month
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// Get the current day
$currentDay = date('j');

// Output the calendar HTML
echo '<div class="calendar">';
echo '<div class="container">';
echo '<div class="mdy">' . date('Y', strtotime("$year-$month-01")) . '</div>';
echo '<div class="mdy" style="justify-content:center;">' . date('F', strtotime("$year-$month-01")) . '</div>';
echo '<div class="mdy" style="justify-content:right;"><a href="?year=' . $prevYear . '&month=' . $prevMonth . '" class="prev-month-button"> &#x003C; </a>';
echo '<a href="?year=' . $nextYear . '&month=' . $nextMonth . '" class="next-month-button"> &#x003E; </a></div>';
echo '</div>';
echo '<table class="calendar-table">'; // Add a class to the table for styling
echo '<tr>';
echo '<th class="sunday">Sun</th>';
echo '<th>Mon</th>';
echo '<th>Tue</th>';
echo '<th>Wed</th>';
echo '<th>Thu</th>';
echo '<th>Fri</th>';
echo '<th>Sat</th>';
echo '</tr>';

// Get the first day of the month as a number (0 for Sunday, 6 for Saturday)
$firstDay = date('w', strtotime("$year-$month-01"));

// Determine the number of empty cells for the first row
$emptyCells = $firstDay;

// Start the calendar with empty cells for the previous month's days
echo '<tr>';

// Output empty cells for the previous month
for ($i = 0; $i < $emptyCells; $i++) {
    // Calculate the day from the previous month
    $prevMonthDay = cal_days_in_month(CAL_GREGORIAN, $prevMonth, $prevYear) - $emptyCells + $i + 1;
    
    // Output the previous month's day in gray
    echo '<td class="gray">' . $prevMonthDay . '</td>';
}

// Output the days of the month
for ($day = 1; $day <= $daysInMonth; $day++) {
    // Determine if the current day is today
    $isToday = ($day == $currentDay && $year == date('Y') && $month == date('m'));
    
    // Add a class for today
    $dayClass = $isToday ? 'today' : '';
    
    // Add a class to the Sunday column
    $sundayClass = ($firstDay == 0) ? 'sunday' : '';
    
    echo '<td class="' . $dayClass . ' ' . $sundayClass . '">' . $day . '</td>';

    // If it's Saturday (6), end the row
    if ($firstDay == 6) {
        echo '</tr>';
        
        // Start a new row for the next week
        echo '<tr>';
        
        // Reset the firstDay counter
        $firstDay = 0;
    } else {
        // Increment the firstDay counter
        $firstDay++;
    }
}

// Complete the last row with empty cells if needed
while ($firstDay != 0) {
    // Calculate the day from the next month
    $nextMonthDay = 1 + $firstDay;
    
    // Output the next month's day in gray
    echo '<td class="gray">' . $nextMonthDay . '</td>';
    
    // If it's Saturday (6), end the row
    if ($firstDay == 6) {
        echo '</tr>';
    }
    
    // Increment the firstDay counter
    $firstDay++;
    
    // Reset the counter at the end of the week (Sunday)
    if ($firstDay == 7) {
        $firstDay = 0;
    }
}

echo '</table>';
echo '</div>';
?>







    <!-- UPCOMING -->
    <p style="color: #505050;">upcoming</p>
    <div class="upcoming-events-container">
    
    <?php
    // Connect to your database (same code as before)
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'edr_db';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch upcoming events from the database
    $today = date('Y-m-d');
    $sql = "SELECT event_date, event_name, event_time FROM events WHERE event_date >= ? ORDER BY event_date";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $today);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $eventDate = date('F j, Y', strtotime($row['event_date']));
        $eventName = ucfirst($row['event_name']);
        $eventTime = date('h:i A', strtotime($row['event_time']));
        
        // Extract day from the event date
        $eventDay = date('d', strtotime($eventDate));
        
        // Display the day with blue background
        echo '<div class="event">';
        echo '<div class="upcoming-day">' . $eventDay . '</div>';
        echo '<div class="upcoming-name">' . $eventName . '</div>';
        echo '<div class="upcoming-name2">' . $eventDate . '</div>';
        echo '<div class="upcoming-time">' . $eventTime . '</div>';
        echo '</div>';
    }

    $stmt->close();
    $conn->close();
    ?>
  </div>

  </div>

  <div class="division">

  <div class="warning-system">
    <table>
    <tr>
      <th>RAINFALL ADVISORIES</th>
      <th>FLOOD POSSIBILITY</th>
      <th>RESPONSE</th>
    </tr>

    <tr>
      <td bgcolor="#ff0000">RED TORRENTIAL</td>
      <td bgcolor="#ce0000">
        <h1>More than 30mm rain</h1>
        <p>observe in 1 hour and expected to continue in the next 2 hours.</p>
        <img src="images/weather-icons/animated/rainy-6.svg">
        <p>Serious flooding expected in low lying areas</p>
      </td>
      <td bgcolor="#ff0000">EVACUATION</td>
    </tr>

    <tr>
      <td bgcolor="#ff8000">ORANGE INTENSE</td>
      <td bgcolor="#d97107">
        <h1>15-30mm (intense rain)</h1>
        <p>observe in 1 hour and expected to continue in the next 2 hours.</p>
        <img src="images/weather-icons/animated/rainy-7.svg">
        <p>Flooding is threatening</p>
      </td>
      <td bgcolor="#ff8000">
        ALERT
        <p>for possible evacuation</p>
      </td>
    </tr>

    <tr>
      <td bgcolor="#ffbb00">YELLOW HEAVY</td>
      <td bgcolor="#dfa401">
        <h1>7.5-15mm (heavy) rain</h1>
        <p>observe in 1 hour and expected to continue in the next 2 hours.</p>
        <img src="images/weather-icons/animated/rainy-5.svg">
        <p>Flooding is possible</p>
      </td>
      <td bgcolor="#ffbb00">
        MONITOR
        <p>the weather condition</p>
      </td>
    </tr>
    </table>

    <img src="images/calamity.png">

    </div>
  </div>



  
  <div class="division">
    <div class="clock">
      Philippine Standard Time:
      <div id="clock" style="margin-top: 10px;"></div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125191.32954780909!2d124.6807399445262!3d11.317962096966223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e7accef4379%3A0x59aeb64fdae6fcee!2sBarugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1694240429866!5m2!1sen!2sph" width="300" height="280" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
    
  </div>

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

<script>
// TOPNAV
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// Early warning and alert
 // Fetch data from OpenWeatherMap API
 fetch('https://api.openweathermap.org/data/2.5/weather?q=barugo,leyte&appid=ac61a2a4ee180f84e878fa11d084815d')
  .then(response => response.json())
  .then(data => {
    const alertMessage = document.getElementById('alertMessage');
    if (data.weather && data.weather.length > 0) {
      const weatherCondition = data.weather[0].main;
      if (weatherCondition.toLowerCase().includes('typhoon')) {
        alertMessage.innerText = 'Typhoon alert!';
      } else {
        alertMessage.innerText = 'No active Emergency Alert and Warning Message as of present time.';
      }
    } else {
      alertMessage.innerText = 'No alert available.';
    }
  })
  .catch(error => {
    console.log('Error fetching weather data:', error);
    const alertMessage = document.getElementById('alertMessage');
    alertMessage.innerText = 'Error fetching weather data.';
  });

// CLOCK
function updateClock() {
  const now = new Date();
  const pstOffset = 8 * 60 * 60 * 1000; // Philippine Standard Time offset in milliseconds
  const pstTime = new Date(now.getTime() + pstOffset);

  const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
  const dayOfWeek = daysOfWeek[pstTime.getUTCDay()];

  const months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  const month = months[pstTime.getUTCMonth()];
  const day = pstTime.getUTCDate();
  const year = pstTime.getUTCFullYear();

  let hours = pstTime.getUTCHours();
  let ampm = 'AM';
  if (hours > 12) {
    hours -= 12;
    ampm = 'PM';
  } else if (hours === 0) {
    hours = 12;
  }

  const minutes = String(pstTime.getUTCMinutes()).padStart(2, '0');
  const seconds = String(pstTime.getUTCSeconds()).padStart(2, '0');

  const clockElement = document.getElementById('clock');
  clockElement.textContent = `${dayOfWeek}, ${month} ${day}, ${year} ${hours}:${minutes}:${seconds} ${ampm}`;
}

updateClock(); // Call once to initialize the clock
setInterval(updateClock, 1000); // Update every second
</script>
</body>
</html>