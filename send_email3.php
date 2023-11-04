<!DOCTYPE html>
<html>
<head>
    <script src="https://apis.google.com/js/api.js"></script>
    <script>
        function sendEmail() {
            gapi.load('client:auth2', initClient);
        }

        function initClient() {
            gapi.client.init({
                apiKey: 'AIzaSyBOUCGYcG47_XAULdQ65_jQq6RZb_Anm48',
                clientId: 'YOUR_CLIENT_ID',
                discoveryDocs: ['https://www.googleapis.com/discovery/v1/apis/gmail/v1/rest'],
                scope: 'https://www.googleapis.com/auth/gmail.send',
            }).then(function () {
                return gapi.auth2.getAuthInstance().signIn();
            }).then(function () {
                sendMessage();
            });
        }

        function sendMessage() {
            const email = '';
            const headers = {
                'To': 'recipient@example.com',
                'Subject': 'Subject of the email',
            };
            const message = '';

            const emailEncoded = btoa(email);
            const messageEncoded = btoa(headers + '\r\n\r\n' + message);
            const request = gapi.client.gmail.users.messages.send({
                'userId': 'me',
                'resource': {
                    'raw': emailEncoded + messageEncoded,
                }
            });

            request.execute(response => {
                console.log(response);
            });
        }
    </script>
</head>
<body>
    <button onclick="sendEmail()">Send Email</button>
</body>
</html>
