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
  <title>Disaster Ready: Official Website of MDRRMO Barugo</title>
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/admin-home.css">
  <link rel="icon" href="images/icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

    <a href="admin-typhoon.php">Typhoon</a>
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php" class="active">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
<div class="division">

<form action="add_event.php" method="POST" id="eventForm">

<!-- UPCOMING -->

<div class="upcoming-container" style="margin-top: 2%;">
  <div class="preview-text">Preview</div>
    <div class="upcoming-events-container">
    
    <?php
    // Connect to your database (same code as before)
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'disaster_ready';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch upcoming events from the database
    $today = date('Y-m-d');
    $sql = "SELECT * FROM events WHERE event_date >= ? ORDER BY event_date";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $today);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
      $eventId = $row['id'];
      $eventDate = date('F j, Y', strtotime($row['event_date']));
      $eventName = ucfirst($row['event_name']);
      $eventTime = $row['event_time'];
      $eventDescription = $row['event_description'];

       // Extract day from the event date
      $eventDay = date('j', strtotime($eventDate));

      // Display each event with a unique ID
      echo '<div class="event" id="event_'.$eventId.'">';
      echo '<div class="upcoming-day">' . $eventDay . '</div>';
      echo '<div class="upcoming-name">' . $eventName . '</div>';
      echo '<div class="upcoming-date">' . $eventDate . '</div>';
      echo '<div class="upcoming-time">' . $eventTime . '</div>';
      echo '<div class="upcoming-description" style="display: none;">' . $eventDescription . '</div>';
      echo '</div>';
  }

    $stmt->close();
    $conn->close();
    ?>
  </div>
</div>
</div>

  <div class="division">
    <div class="textarea-wrapper" style="flex-direction: row;">
      <div class="placeholder">Select a Day</div>
      <input type="text" name="eventDate" id="eventDate" required style="margin-right: 10px;">

        <div class="placeholder" style="left: 52%;">Time</div>
        <input type="time" name="eventTime" id="eventTime" required>
      </div>
    
      <div class="textarea-wrapper">
        <div class="placeholder">Title</div>
        <input type="text" name="eventTitle" id="eventTitle" required>
      </div>

      <div class="textarea-wrapper">
        <div class="placeholder" style="top: 0; left: 0;">Event</div>
        <textarea name="eventDescription" id="eventDescription" required></textarea>
      </div>
  </div>
  <!-- </div> -->



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
echo '<div class="buttons-container">';
echo '<button class="remove" disabled>Remove</button>';
echo '<button type="submit" value="Add Event" class="done" onclick="addEvent()">Done</button>';
echo '</div>';
echo '</div>';
?>
</form>
</div>

    <script>
    // JavaScript function to handle date cell background color
    function updateDateCellBackground() {
        // Get the selected date from the eventDate input
        var selectedDate = document.getElementById('eventDate').value;

        // Split the selected date into year, month, and day
        var parts = selectedDate.split('-');
        var selectedYear = parseInt(parts[0]);
        var selectedMonth = parseInt(parts[1]);
        var selectedDay = parseInt(parts[2]);

        // Get all the date cells in the calendar
        var dateCells = document.querySelectorAll('.calendar-table td');

        // Loop through the date cells and update background colors
        dateCells.forEach(function (cell) {
            if (!cell.classList.contains('gray')) {
                // Get the date from the cell
                var cellDate = parseInt(cell.textContent);

                // Determine if the cell date matches the selected date
                var isMatch = (
                    cellDate === selectedDay &&
                    selectedYear === currentYear &&
                    selectedMonth === currentMonth
                );

                // Apply different background colors based on the comparison
                if (isMatch) {
                    cell.style.backgroundColor = 'lightgreen'; // Change to your desired color
                } else {
                    cell.style.backgroundColor = ''; // Reset the background color
                }
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        // Check if the event was added successfully
        if (typeof eventAddedSuccessfully !== 'undefined' && eventAddedSuccessfully) {
            var snackbar = document.getElementById('snackbar');
            snackbar.className = 'show';

            // After 3 seconds, hide the Snackbar
            setTimeout(function () {
                snackbar.className = snackbar.className.replace('show', 'hide');
            }, 3000);
        }

        // Handle click events on calendar cells
        var calendarTable = document.querySelector('.calendar-table');
        calendarTable.addEventListener('click', function (event) {
            if (event.target.tagName === 'TD' && !event.target.classList.contains('gray')) {
                // Get the clicked date
                var clickedDate = event.target.textContent;

                // Get the current year and month from the calendar header
                var currentYear = parseInt(document.querySelector('.mdy:first-child').textContent);
                var currentMonth = document.querySelector('.mdy:nth-child(2)').textContent;

                // Convert the month name to its numeric representation
                var monthMap = {
                    'January': '01',
                    'February': '02',
                    'March': '03',
                    'April': '04',
                    'May': '05',
                    'June': '06',
                    'July': '07',
                    'August': '08',
                    'September': '09',
                    'October': '10',
                    'November': '11',
                    'December': '12'
                };
                var currentMonthNumeric = monthMap[currentMonth];

                // Ensure that the day portion of the selected date has two digits
                var clickedDatePadded = clickedDate.length === 1 ? '0' + clickedDate : clickedDate;

                // Set the selected date in the format yyyy-mm-dd
                var selectedDate = currentYear + '-' + currentMonthNumeric + '-' + clickedDatePadded;

                // Update the eventDate input value
                document.getElementById('eventDate').value = selectedDate;

                // Update the date cell background colors
                updateDateCellBackground();
            }
        });

        // Call the function when the page loads
        updateDateCellBackground();
    });

    // JavaScript function to handle form submission
    function addEvent() {
        var eventForm = document.getElementById('eventForm');

        // Create a new FormData object to store form data
        var formData = new FormData(eventForm);

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Define the AJAX request
        xhr.open('POST', 'add_event.php', true);

        // Define the callback function when the request is complete
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Check if the response indicates success
                if (xhr.responseText === 'Event added successfully.') {
                    // Show the success message in the Snackbar
                    var snackbar = document.getElementById('snackbar');
                    snackbar.innerHTML = xhr.responseText;
                    snackbar.className = 'show';

                    // After 3 seconds, hide the Snackbar
                    setTimeout(function () {
                        snackbar.className = snackbar.className.replace('show', 'hide');
                    }, 3000);

                    // Clear the form
                    eventForm.reset();
                } else {
                    // Show an error message in the Snackbar
                    var snackbar = document.getElementById('snackbar');
                    snackbar.innerHTML = 'Error adding event: ' + xhr.responseText;
                    snackbar.className = 'show';
                }
            }
        };

        // Send the form data to the server
        xhr.send(formData);

        // Prevent the default form submission
        return false;
    }

    $(document).ready(function(){
        // Function to format date for date input
        function formatDateForInput(dateString) {
            var date = new Date(dateString);
            var year = date.getFullYear();
            var month = ("0" + (date.getMonth() + 1)).slice(-2);
            var day = ("0" + date.getDate()).slice(-2);
            return year + "-" + month + "-" + day;
        }

        // Add an event listener to each event
        $('.event').click(function(){
            // Retrieve values from the event
            var eventDate = $(this).find('.upcoming-date').text().trim();
            var eventTime = $(this).find('.upcoming-time').text().trim();
            var eventTitle = $(this).find('.upcoming-name').text().trim();
            var eventDescription = $(this).find('.upcoming-description').text().trim();

            // Populate the input fields with the formatted values
            $('#eventDate').val(formatDateForInput(eventDate));
            $('#eventTime').val(eventTime);
            $('#eventTitle').val(eventTitle);
            $('#eventDescription').val(eventDescription);
        });
    });
</script>

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