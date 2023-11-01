<!DOCTYPE html>
<html>
<head>
  <title>Vonage SMS Sender</title>
</head>
<body>
  <h1>Send SMS via Vonage</h1>
  <label for="phoneNumber">Phone Number:</label>
  <input type="text" id="phoneNumber" /><br><br>
  <label for="message">Message:</label>
  <input type="text" id="message" /><br><br>
  <button onclick="sendSMS()">Send SMS</button>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    function sendSMS() {
      var phoneNumber = $('#phoneNumber').val();
      var message = $('#message').val();

      $.ajax({
        url: 'https://rest.nexmo.com/sms/json',
        type: 'POST',
        data: {
          api_key: 'Master (22e5cc02) ',
          api_secret: 'PajCFQYVmd4ZkQVN',
          to: phoneNumber,
          from: '+639613851427',
          text: message
        },
        success: function(data) {
          alert('SMS sent successfully!');
        },
        error: function(err) {
          console.error('Error:', err);
          alert('Failed to send SMS.');
        }
      });
    }
  </script>
</body>
</html>
