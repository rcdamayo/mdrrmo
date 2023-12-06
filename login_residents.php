<?php
session_start(); // Start the session to store user information

include "db_connection.php"; // Include your database connection script

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Hash the entered password to match the stored hashed password in the database
    $hashedPassword = sha1($password); // Use the same hashing algorithm used during registration

    // Check credentials against the 'residents' table
    $sql = "SELECT * FROM residents WHERE username='$username' AND password='$hashedPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Authentication successful
        $user = $result->fetch_assoc();
        
        // Store user information in the session for future use
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        // Redirect to a dashboard or any other authenticated page
        header("Location: index.php");
        exit();
    } else {
        // Authentication failed
        echo "<script>
        
            alert('Invalid username or password.');

            window.location.href = 'index.php';
            </script>";
    }
}

// Close the database connection
$conn->close();
?>
