<!DOCTYPE html>
<html>
<head>
    <title>Send SMS</title>
</head>
<body>
    <form action="send_sms.php" method="post">
        <label for="numbers">Enter numbers (separated by commas):</label><br>
        <input type="text" id="numbers" name="numbers" required><br><br> <!-- added "required" for mandatory input -->
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br> <!-- added "required" for mandatory input -->
        <input type="submit" value="Send SMS">
    </form>
</body>
</html>
