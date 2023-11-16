<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twilio Message Sender</title>
</head>
<body>
    <h1>Twilio Message Sender</h1>
    <form method="post" action="send-message.php">
        <label for="phoneNumbers">Phone Numbers (comma-separated):</label>
        <input type="text" id="phoneNumbers" name="phoneNumbers" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Send Message</button>
    </form>
</body>
</html>
