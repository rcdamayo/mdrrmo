<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "edr_db"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all email addresses from the database
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $email = $row["email"];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $to = $email;
        $headers = "From: mailgun@sandboxb341a6c17d2642a7aca021df8f197fa3.mailgun.org" . "\r\n";

        mail($to, $subject, $message, $headers);
    }
} else {
    echo "No results found in the database.";
}

$conn->close();
?>
