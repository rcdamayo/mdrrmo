<!DOCTYPE html>
<html>
<head>
  <title>Send SMS</title>
</head>
<body>
  <h2>Send SMS</h2>
  <form id="smsForm">
    <label for="phoneNumber">Phone Number:</label><br>
    <input type="text" id="phoneNumber" name="phoneNumber"><br><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
    <button type="button" onclick="sendSMS()">Send SMS</button>
  </form>

  <script>
    function sendSMS() {
      var phoneNumber = document.getElementById('phoneNumber').value;
      var message = document.getElementById('message').value;
      var apiKey = 'MzY2YjU1NTc1MDY1NTIzMzM4NjQ0YjZjNjQ2NzZlNzA='; // Replace with your Textlocal API key
      var sender = 'MDRRMO '; // Replace with your Textlocal sender ID

      var url = 'https://api.textlocal.in/send/?apikey=' + apiKey + '&numbers=' + phoneNumber + '&message=' + message + '&sender=' + sender;

      var xhr = new XMLHttpRequest();
      xhr.open("GET", url, true);
      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
          alert("SMS sent successfully!");
        } else {
          alert("Failed to send SMS. Please try again later.");
        }
      };
      xhr.send();
    }
  </script>
</body>
</html>
