<!DOCTYPE html>
<html>
<head>
    <title>Register Recipient</title>
</head>
<body>
    <h2>Register Recipient</h2>
    <form id="recipientForm">
        <label for="recipientEmail">Recipient Email:</label><br>
        <input type="email" id="recipientEmail" name="recipientEmail" required><br><br>
        <input type="submit" value="Register Recipient">
    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#recipientForm').submit(function (e) {
            e.preventDefault();
            var recipientEmail = $('#recipientEmail').val();

            $.ajax({
                type: "POST",
                url: "https://app.mailgun.com/app/sending/domains/sandboxb341a6c17d2642a7aca021df8f197fa3.mailgun.org",
                headers: {
                    "Authorization": "Basic " + btoa("api:bb6b42441a354b3d161f78a7e8300e37-3e508ae1-30d3ff8c"),
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                data: {
                    subscribed: true,
                    address: recipientEmail
                },
                success: function () {
                    alert('Recipient registered successfully!');
                },
                error: function () {
                    alert('Failed to register recipient.');
                }
            });
        });
    </script>
</body>
</html>