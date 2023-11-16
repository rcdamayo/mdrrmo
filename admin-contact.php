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
    <title>Disaster Ready Admin: Contact</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/admin-contact.css">
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


<script>
  // JavaScript for dropdown functionality
  document.addEventListener("DOMContentLoaded", function() {
    var dropdown = document.querySelector(".dropdown");
    dropdown.addEventListener("hover", function() {
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
    <a href="admin-contact.php" class="active">Contact</a>
    <a href="admin-flood.php">Flood</a>
    <a href="admin-home.php">Home</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
</div>

<div class="main">
  <div class="division">
    <div class="list-container">
      <h1>Registered Contacts</h1>

      <?php
include 'db_connection.php';

$sql = "SELECT * FROM residents ORDER BY barangay";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form id='updateForm' onsubmit='updateData(event)' method='post' action='update_email_verif.php'>";
    echo '<table>
      <tr>
        <th>
          <select name="selectedBarangay" id="selectedBarangay" onchange="filterResidents()">
            <option value="All">Barangay</option>
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
        </th>
        <th>Name</th>
        <th>Phone</th>
        <th>
          <button type="button" class="addAllButton" onclick="addAllPhoneNumbers()">Add All</button>
        </th>
      </tr>';

    while ($row = $result->fetch_assoc()) {
        echo "<tr class='residentRow' data-barangay='" . $row["barangay"] . "'>
          <td>" . $row["barangay"] . "</td>
          <td>" . $row["last_name"] . "<p style='display: inline;'>, </p>" . $row["first_name"] . "</td>
          <td>+63" . $row["phone_no"] . "</td>
          <td></td>
        </tr>";
    }

    echo "</table>";
    echo "</form>";

} else {
    echo "No results found";
}

$conn->close();
?>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function filterResidents() {
        var selectedBarangay = $('#selectedBarangay').val();

        if (selectedBarangay === 'All') {
            $('.residentRow').show();
        } else {
            $('.residentRow').hide();
            $('.residentRow[data-barangay="' + selectedBarangay + '"]').show();
        }
    }


    function addAllPhoneNumbers() {
        // Clear the existing values in the input field
        $('#phoneNumbers').val('');

        var selectedBarangay = $('#selectedBarangay').val();
        var isFirstPhoneNumber = true;

        // Iterate through all rows
        $('.residentRow').each(function() {
            var rowBarangay = $(this).find('td:eq(0)').text().trim(); // Assuming the barangay is in the first column (index 0)
            var phoneNumber = $(this).find('td:eq(2)').text().trim(); // Assuming the phone number is in the third column (index 2)

            // Check if the "All" option is selected or if the row's barangay matches the selected barangay
            if (selectedBarangay === 'All' || rowBarangay === selectedBarangay) {
                // Add a comma only if it's not the first phone number
                if (!isFirstPhoneNumber) {
                    $('#phoneNumbers').val($('#phoneNumbers').val() + ', ');
                }
                $('#phoneNumbers').val($('#phoneNumbers').val() + phoneNumber);
                
                // Set isFirstPhoneNumber to false after the first phone number is added
                isFirstPhoneNumber = false;
            }
        });
    }
</script>


</div>

<div id='snackbar'></div>

  <!-- <td>
    <button class='switch' onclick='toggleDisplay(this, " . $row['id'] . ")'>" . ($row['verified'] === 'y' ? '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0043a8" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>' : 
      '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f9b314" viewBox="0 0 256 256"><path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path></svg>') . "</button>
    <input type='hidden' name='verified[]' value='" . $row['verified'] . "'>
    <input type='hidden' name='id[]' value='" . $row['id'] . "'>
  </td> -->

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

function toggleDisplay(button, id) {
    var currentValue = button.nextElementSibling.value;

    // Toggle the value and button text
    if (currentValue === 'y') {
        button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f9b314" viewBox="0 0 256 256"><path d="M232,128A104,104,0,1,1,128,24,104.13,104.13,0,0,1,232,128Z"></path></svg>';
        button.nextElementSibling.value = 'n';
    } else {
        button.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#0043a8" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path></svg>';
        button.nextElementSibling.value = 'y';
    }
}

function updateData(event) {
    event.preventDefault();
    var form = document.getElementById("updateForm");
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_email_verif.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = xhr.responseText.trim();
                if (response.includes('Error')) {
                    showSnackbar("Error marking email");
                } else {
                    showSnackbar("Email verification marked successfully");
                }
            } else {
                showSnackbar("Error marking email");
            }
        }
    };
    xhr.send(formData);
}
</script>

</div>





  <div class="division">
    <div class="verify-register-box">
    <div class="register-container">
        <h1>Register Contact</h1>

        <form id='updateContacts' onsubmit='addContacts(event)' method='post' action='add_contacts.php'>
        <!-- <form action="add_contacts.php" method="POST"> -->
      <div class="input-container">
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="lastName" placeholder="Last Name">
      </div>

      <div class="input-container">
        <select name="barangay">
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
      </div>

      <div class="input-container">
        <input type="number" name="phoneNo" placeholder="Phone No." style="margin: 5px;">
      </div>
      <button type="submit">REGISTER</button>

      </form>
      <div id='snackbar'></div>

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

function addContacts(event) {
    event.preventDefault();
    var form = document.getElementById("updateContacts");
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "add_contacts.php", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                var response = xhr.responseText.trim();
                if (response.includes('Error')) {
                    showSnackbar("Information added successfully. Refresh to see results");
                } else {
                    showSnackbar("Information added successfully. Refresh to see results");
                }
            } else {
                showSnackbar("Information added successfully. Refresh to see results");
            }
        }
    };
    xhr.send(formData);
}
</script>
    </div>




      <div class="chat">
        <h1 style="width: 87%;">Chat</h1>

        <div class="chat-message" id="chat-message">
          <p>Welcome to the chat! Start by typing a message below:</p>
        </div>

        <div class="input-container2">
        <input type="text" id="user-input" placeholder="Type your message here">
        <button type="submit" onclick='sendMessage()'>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#04aa6d" viewBox="0 0 256 256">
            <path d="M232,127.89a16,16,0,0,1-8.18,14L55.91,237.9A16.14,16.14,0,0,1,48,240a16,16,0,0,1-15.05-21.34L60.3,138.71A4,4,0,0,1,64.09,136H136a8,8,0,0,0,8-8.53,8.19,8.19,0,0,0-8.26-7.47H64.16a4,4,0,0,1-3.79-2.7l-27.44-80A16,16,0,0,1,55.85,18.07l168,95.89A16,16,0,0,1,232,127.89Z"></path>
          </svg>  
      </button>
      </div>
        
      </div>
    </div>

    <script>
function sendMessage() {
    var userInput = document.getElementById('user-input');
    var chatMessage = document.getElementById('chat-message');
    var message = userInput.value;

    if (message !== '') {
        var newMessage = document.createElement('p');
        newMessage.innerHTML = '<strong>MDRRMO:</strong> ' + message;
        chatMessage.appendChild(newMessage);
        userInput.value = '';

        // Scroll to the bottom after sending a message
        chatMessage.scrollTop = chatMessage.scrollHeight;

        // Send message to the server
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'save_message.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('user=MDRRMO&message=' + encodeURIComponent(message));
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
                    noMessages.innerHTML = 'Welcome to the chat! Start by typing a message below:';
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
}, 5000); // Adjust the interval as needed
</script>



  <form method="post" action="send-message.php">
    <div class="compose-container">
      <h1 style="width: 93.5%;">Compose Message</h1>
        <button type="submit">SEND</button>
      <div class="input-container" style="margin-top: 1em;">
      <input type="text" id="phoneNumbers" name="phoneNumbers" placeholder="Phone Number/s" required>
      </div>

          <div class="input-container">
          <textarea id="message" name="message" Placeholder="Enter Message here..." required></textarea>
          </div>
    </div>
    </form>

    
  </div>


























</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#emailForm').submit(function (e) {
            e.preventDefault();
            var emailData = {
                email: $('#email').val(),
                subject: $('#subject').val(),
                message: $('#message').val()
            };

            $.ajax({
                type: "POST",
                url: "https://api.mailgun.net/v3/sandboxb341a6c17d2642a7aca021df8f197fa3.mailgun.org/messages",
                headers: {
                    "Authorization": "Basic " + btoa("api:bb6b42441a354b3d161f78a7e8300e37-3e508ae1-30d3ff8c"),
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                data: {
                    from: "MDRRMO Barugo <mailgun@sandboxb341a6c17d2642a7aca021df8f197fa3.mailgun.org>",
                    to: emailData.email,
                    subject: emailData.subject,
                    text: emailData.message
                },
                success: function () {
                    alert('Email sent successfully!');
                },
                error: function () {
                    alert('Failed to send email.');
                }
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
