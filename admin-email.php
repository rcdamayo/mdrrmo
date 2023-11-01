<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>
<h2>Contact Us</h2>
    <form id="emailForm" method="post" action="send_email.php">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Send Email">
    </form>

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
    </script>
</body>
</html>
