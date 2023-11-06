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
  <title>Disaster Ready: Admin</title>
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

    
    <a href="admin-about.php">About</a>
    <a href="admin-typhoon.php">Typhoon</a>
    <a href="admin-email.php">Email</a>
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php" class="active">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
<div class="division">



<!-- PREVIEW -->

<div class="upcoming-container" style="margin-top: 2%;">
  <div class="preview-text"><div class="header-icon">&#x1F441;</div> Preview </div>
    <div class="upcoming-events-container">
    
    <?php
    include 'db_connection.php';

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

  <script>
  document.addEventListener("DOMContentLoaded", function() {
    var events = document.querySelectorAll('.event');

    events.forEach(function(event) {
      event.addEventListener('click', function() {
        events.forEach(function(evt) {
          evt.classList.remove('active');
        });
        event.classList.add('active');
      });
    });
  });
  </script>
</div>
</div>


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
?>


  <div id="snackbar"></div>

</div>




</div>

<div class="division">
  <form action="add_event.php" method="POST" id="eventForm">
  <div class="input-fields">
    <div class="input-fields-header"><div class="header-icon">&#x1F4C5;</div> Create an Event</div>
    
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
        <textarea name="eventDescription" id="eventDescription"></textarea>
      </div>
  </div>

  <div class="buttons-container">
    <button class="done" type="submit" value="Add Event" onclick="addEvent(event)">Done</button>
  </form>
  <form action="remove_event.php" method="POST" id="removeForm">
    <button class="remove" onclick="removeEvent(event)" id="removeButton">Remove</button>
  </form>
  </div>
  
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

function removeEvent() {
  event.preventDefault();
    var activeEvent = document.querySelector('.event.active');
    if (activeEvent) {
        var eventId = activeEvent.id.replace('event_', '');
        var formData = new FormData();
        formData.append('eventId', eventId);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'remove_event.php', true);
        xhr.onload = function () {
            if (xhr.status === 200) {
                if (xhr.responseText.trim() === 'Event deleted successfully.') {
                    activeEvent.remove();
                    showSnackbar('Error deleting event.');
                } else {
                    showSnackbar('Event deleted successfully. Refresh to see results');
                    console.error('Event deleted successfully. Refresh to see results');
                }
            } else {
                showSnackbar('Error deleting event.');
                console.error('Error deleting event');
            }
        };
        xhr.send(formData);
    } else {
        showSnackbar('No active event found.');
    }
}

// Function for adding an event
function addEvent() {
  event.preventDefault();
    var eventForm = document.getElementById('eventForm');
    var formData = new FormData(eventForm);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_event.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            if (xhr.responseText.trim() === 'Event added successfully.') {
                showSnackbar('Error adding event');
            } else {
                showSnackbar('Event added successfully. Refresh to see results');
                console.error('Event added successfully. Refresh to see results');
            }
            eventForm.reset();
        }
    };
    xhr.send(formData);
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