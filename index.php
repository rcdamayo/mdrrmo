<?php
session_start();
?>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
  integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="js/script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
      <p>Login</p>
    </a>

    <a href="map.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M228.92,49.69a8,8,0,0,0-6.86-1.45L160.93,63.52,99.58,32.84a8,8,0,0,0-5.52-.6l-64,16A8,8,0,0,0,24,56V200a8,8,0,0,0,9.94,7.76l61.13-15.28,61.35,30.68A8.15,8.15,0,0,0,160,224a8,8,0,0,0,1.94-.24l64-16A8,8,0,0,0,232,200V56A8,8,0,0,0,228.92,49.69ZM104,52.94l48,24V203.06l-48-24ZM40,62.25l48-12v127.5l-48,12Zm176,131.5-48,12V78.25l48-12Z"></path>
        </svg>
        <p>Map</p>
      </div>
    </a>

    <a href="population.php">
      <div class="navcont">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256">
          <path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path>
        </svg>
        <p>Population</p>
      </div>
    </a>

    <a href="about.php">About</a>
    <a href="typhoon.php">Typhoon</a>
    <a href="flood.php">Flood</a>
    <a href="weather.php">Weather</a>
    <a href="index.php" class="active">Home</a>
    
    <button class="dropbtn">
      <i class="fa fa-bars"></i>
    </button>

    
</div>
    <div class="dropdown-content">
      <a href="index.php" class="active">Home</a>
      <a href="weather.php">Weather</a>
      <a href="flood.php">Flood</a>
      <a href="typhoon.php">Typhoon</a>
      <a href="about.php">About</a>
      <a href="population.php">Population</a>
      <a href="map.php">Map</a>
      <a href="login.php">Login</a>
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
  $nextMonthDay = ($nextMonthDay ?? 0) + 1;
  
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
    
    <div class="upcoming-events-container">
    <p style="color: #505050;">upcoming</p>
    <?php
    include 'db_connection.php';
    
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

  <div class="division" style="padding: 40px 0px; flex: 3;">

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

    <img src="images/PAGASA-FLOOD.jpg">

    <img src="images/Tropical-Cyclone-Warning.jpg" style="height: 50vh;">

    <img src="images/wind_signal_guide.png">

    <img src="images/calamity.png">

    </div>
  </div>



  
  <div class="division">
    <div class="socials">
    <ul>
		<li>
		  <a class="facebook" href="https://www.facebook.com/mdrrmobarugo" target="_blank">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<i class=" fa-brands fa-facebook" aria-hidden="true"></i>
		  </a>
		</li>
		<li>
		  <a class="map" href="https://maps.app.goo.gl/An7D2A34QZyg9QvW6" target="_blank">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<i class="fa fa-map-marker" aria-hidden="true"></i>
		  </a>
		</li>
		<li>
		  <a class="google" href="mailto:mdrrmobarugo@gmail.com" target="_blank">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<i class="fa fa-envelope" aria-hidden="true"></i>
		  </a>
		</li>
	  </ul>
      
    </div>

    <div class="clock">
      Philippine Standard Time:
      <div id="clock" style="margin-top: 10px;"></div>
    </div>

    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125191.32954780909!2d124.6807399445262!3d11.317962096966223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33080e7accef4379%3A0x59aeb64fdae6fcee!2sBarugo%2C%20Leyte!5e0!3m2!1sen!2sph!4v1694240429866!5m2!1sen!2sph" width="300" height="280" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
  
    <div class="hotlines-container">
      <h1>EMERGENCY HOTLINES</h1>

      <div class="national-hotline">
        <h2>NATIONAL EMERGENCY HOTLINE</h2>
        <p>911</p>
      </div>

      <div class="outer-hotlines">
        <div class="hotlines">
          <h2>MDRRMO</h2>
          <p>0917-121-1212</p>
          <p>0912-232-2222</p>
          <p>0934-333-1212</p>
        </div>

        <div class="hotlines">
          <h2 style="color: #ff0000;">...</h2>
          <p>
            BARUGO FIRE STATION
            <br>
            0987-565-4444
          </p>
          <p>
            BARUGO POLICE STATION
            <br>
            0967-547-4444
          </p>
        </div>
      </div>
    </div>

    <?php
      include "db_connection.php";
    


// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in, display the chat section
    echo '
    <div class="chat">
        <h1>
          Contact Us

          <form action="logout-residents.php" method="post">
            <button type="submit">Logout</button>
          </form>
        </h1>
          
        <div class="chat-message" id="chat-message">
            <p>Welcome to the chat! Start by typing a message below:</p>
        </div>
        <div class="input-container">
            <input type="text" id="user-input" placeholder="Type your message here">
            <button type="submit" onclick="sendMessage()">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#04aa6d" viewBox="0 0 256 256">
                    <path d="M232,127.89a16,16,0,0,1-8.18,14L55.91,237.9A16.14,16.14,0,0,1,48,240a16,16,0,0,1-15.05-21.34L60.3,138.71A4,4,0,0,1,64.09,136H136a8,8,0,0,0,8-8.53,8.19,8.19,0,0,0-8.26-7.47H64.16a4,4,0,0,1-3.79-2.7l-27.44-80A16,16,0,0,1,55.85,18.07l168,95.89A16,16,0,0,1,232,127.89Z"></path>
                </svg>
            </button>
        </div>
    </div>';
} else {
    // User is not logged in, display the flip card with login/register forms
    echo '

    <div class="flip-card mx-auto" id="flipCard">
      <div class="flip-card-inner">
          <div class="flip-card-front">
              <div class="card-switch">
                <h2>LOGIN</h2>
                <button class="flip-btn-front" onclick="flipCard()">REGISTER</button>
              </div>
              
              <form id="loginForm" action="login_residents.php" method="post">
                  <label for="username">Username</label>
                  <input type="text" id="username" name="username" required>

                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" required>

                  <button type="submit" class="login-btn">LOGIN</button>
              </form>
              
          </div>
        <div class="flip-card-back">
            <div class="card-switch">
              <button class="flip-btn-front" onclick="flipCard()">LOGIN</button>
              <h2>REGISTER</h2>
                
            </div>
            <form id="registerForm" action="register_residents.php" method="post" onsubmit="submitForm(event)">
              
              <input type="text" id="username" name="username" placeholder="Username" required>
              <input type="password" id="password" name="password" placeholder="Password" required>
              <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
              <input type="number" id="phone_no" name="phone_no" placeholder="Phone Number" required>
                <select name="barangay" placeholder="Barangay" >
                  <option value="">Barangay</option>
                  <option value="Abango">Abango</option>
                  <option value="Amahit">Amahit</option>
                  <option value="Balire">Balire</option>
                  <option value="Balud">Balud</option>
                  <option value="Bukid">Bukid</option>
                  <option value="Bulod">Bulod</option>
                  <option value="Busay">Busay</option>
                  <option value="Cabarasan">Cabarasan</option>
                  <option value="Cabolo-an">Cabolo-an</option>
                  <option value="Calingcaguing">Calingcaguin</option>
                  <option value="Can-isak">Can-Isak</option>
                  <option value="Canomantag">Canomantag</option>
                  <option value="Cuta">Cuta</option>
                  <option value="Domogdog">Domogdog</option>
                  <option value="Duka">Duka</option>
                  <option value="Guindaohan">Guindaohan</option>
                  <option value="Hiagsam">Hiagsam</option>
                  <option value="Hilaba">Hilaba</option>
                  <option value="Hinugayan">Hinugayan</option>
                  <option value="Ibag">Ibag</option>
                  <option value="Minuhang">Minuhang</option>
                  <option value="Minuswang">Minuswang</option>
                  <option value="Pikas">Pikas</option>
                  <option value="Pitogo">Pitogo</option>
                  <option value="Poblacion Dist. I">Poblacion Dist. I</option>
                  <option value="Poblacion Dist. II">Poblacion Dist. II</option>
                  <option value="Poblacion Dist. III">Poblacion Dist. III</option>
                  <option value="Poblacion Dist. IV">Poblacion Dist. IV</option>
                  <option value="Poblacion Dist. V">Poblacion Dist. V</option>
                  <option value="Poblacion Dist. VI">Poblacion Dist. VI</option>
                  <option value="Pongso">Pongso</option>
                  <option value="Roosevelt">Roosevelt</option>
                  <option value="San Isidro">San Isidro</option>
                  <option value="San Roque">San Roque</option>
                  <option value="Santa Rosa">Santa Rosa</option>
                  <option value="Santarin">Santarin</option>
                  <option value="Tutug-an">Tutug-an</option>
                </select>

                <button type="submit" class="register-btn">REGISTER</button>
            </form>
        </div>
    </div>
</div>';

}
?>



      <script>

function flipCard() {
    var card = document.getElementById('flipCard');
    card.classList.toggle('flip');
}

function sendMessage() {
    var userInput = document.getElementById('user-input');
    var chatMessage = document.getElementById('chat-message');
    var message = userInput.value;

    if (message !== '') {
        var newMessage = document.createElement('p');
        newMessage.innerHTML = '<strong>Resident:</strong> ' + message;
        chatMessage.appendChild(newMessage);
        userInput.value = '';

        // Scroll to the bottom after sending a message
        chatMessage.scrollTop = chatMessage.scrollHeight;

        // Send message to the server
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'save_message.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('user=Resident&message=' + encodeURIComponent(message));
    }
}

function loadMessages() {
    // Retrieve messages from the server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var chats = JSON.parse(xhr.responseText);
                var chatMessage = document.getElementById('chat-message');
                chatMessage.innerHTML = ''; // Clear existing messages

                if (chats.length > 0) {
                    chats.forEach(function (msg) {
                        var newMessage = document.createElement('p');
                        newMessage.innerHTML = '<strong>' + msg.user + ':</strong> ' + msg.message;
                        chatMessage.appendChild(newMessage);
                    });
                } else {
                    // Display a message when there are no messages
                    var noMessages = document.createElement('p');
                    noMessages.innerHTML = 'Welcome to the chat! Type a message below to chat with the MDRRMO office for any concerns.';
                    chatMessage.appendChild(noMessages);
                }

                // Scroll to the bottom after loading messages
                chatMessage.scrollTop = chatMessage.scrollHeight;
            } else {
                console.error('Error loading messages:', xhr.status, xhr.statusText);
            }
        }
    };
    xhr.open('GET', 'save_message.php', true);
    xhr.send();
}

// Load messages on page load
loadMessages();

// Event listener for the Enter key
document.getElementById('user-input').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        sendMessage();
        loadMessages(); // Reload messages after sending a new one
    }
});

// Automatically load messages every 5 seconds (adjust as needed)
setInterval(function () {
    loadMessages();
}, 3000); // Adjust the interval as needed


function submitForm(event) {
        event.preventDefault(); // Prevent the default form submission

        // Perform an asynchronous form submission using AJAX
        $.ajax({
            url: $('#registerForm').attr('action'),
            type: 'post',
            data: $('#registerForm').serialize(),
            success: function(response) {
                // Handle the response from the server
                console.log(response);

                // Show an alert after registering
                alert('Registration successful!');

                // You can update the UI or perform other actions here

                // If you want to redirect after a successful submission
                window.location.href = 'index.php';
            },
            error: function(error) {
                // Handle the error
                console.error(error);
            }
        });
    }
</script>


    </div>
  </div>

</div>

<div class="footer" style="margin-top: 3rem;">
  <div class="foot-txt">
  <img src="images/footer.png">
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
 document.addEventListener("DOMContentLoaded", function () {
  var dropdownButton = document.querySelector(".dropbtn");

  dropdownButton.addEventListener("click", function () {
    var dropdownContent = document.querySelector(".dropdown-content");
    dropdownContent.style.height = (dropdownContent.style.height === "65vh") ? "0" : "65vh";
  });
});


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

<div id="snackbar"></div>

</body>
</html>