<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>

    <?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve user input
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Validate the user registration (e.g., check if passwords match)
        if ($password === $confirm_password) {
            // Registration successful
            // Hash the password (use a strong hashing algorithm, e.g., password_hash)
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Save the user information to the database (replace with your database logic)
            if (registerUser($username, $hashed_password)) {
                // Registration successful
                echo '<p>Registration successful. You can now <a href="login.php">login</a>.</p>';
            } else {
                // Registration failed due to a database error
                echo '<p>Registration failed due to a database error.</p>';
            }
        } else {
            // Registration failed due to password mismatch
            echo '<p>Passwords do not match. Please try again.</p>';
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>

<?php
// Function to register a user (replace with your database logic)
function registerUser($username, $password) {
    // Placeholder for database connection (replace with your actual database connection logic)
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "disaster_ready";

    // Create a database connection (modify as needed based on your database system)
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs to prevent SQL injection (consider using prepared statements)
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Example query: Insert the user into the database
    $query = "INSERT INTO admins (username, password) VALUES ('$username', '$password')";

    // Execute the query
    if ($conn->query($query) === TRUE) {
        // Registration successful
        $conn->close();
        return true;
    } else {
        // Registration failed
        $conn->close();
        return false;
    }
}
?>
