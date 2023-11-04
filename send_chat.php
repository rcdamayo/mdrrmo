<!DOCTYPE html>
<html>
<head>
    <title>Send Messages to Messenger Accounts</title>
</head>
<body>

<form method="post" action="">
    <label for="access_token">Access Token:</label><br>
    <input type="text" id="access_token" name="access_token"><br><br>

    <label for="servername">Server Name:</label><br>
    <input type="text" id="servername" name="servername"><br><br>

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username"><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <label for="dbname">Database Name:</label><br>
    <input type="text" id="dbname" name="dbname"><br><br>

    <input type="submit" value="Send Messages">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $access_token = $_POST['EAAMeXl6kpggBO0QxaSKTiaN0LE1cV7BDBYrhr4NkfmLgFYYZCvjGa5ZB1Pr7nxqpaFZBroBaVZB72TsqqmYHTgK61XdH9yRxSOxj4oeTCzmUifTF6wv1i1YtmDTCaCgHruVAKHhPrSEVgapTpMQ2XCqZB5U65oFXE9iB6ZBfQNvfSKsYWBQF1fGDsvctmh3e899STmxcH1wKjrZAoUGeRPiZBZCt3ImZBQvCmAYAqt8lavXDBrYlSZCnUexcQ1xZBuof2vUZD'];
    $servername = $_POST['localhost'];
    $username = $_POST['root'];
    $password = $_POST[''];
    $dbname = $_POST['edr_db'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("SELECT fb_acc FROM residents");
        $stmt->execute();

        $recipient_ids = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $recipient_ids[] = $row['fb_acc'];
        }

        $message_text = 'Your message here';

        foreach ($recipient_ids as $recipient_id) {
            $request_body = json_encode([
                'messaging_type' => 'RESPONSE',
                'recipient' => [
                    'id' => $recipient_id
                ],
                'message' => [
                    'text' => $message_text
                ]
            ]);

            $ch = curl_init('https://graph.facebook.com/v13.0/me/messages?access_token=' . $access_token);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $request_body);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_exec($ch);
            curl_close($ch);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>

</body>
</html>
