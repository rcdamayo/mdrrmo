<?php
include "db_connection.php";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $phone_no = $_POST["phone_no"];
    $barangay = $_POST["barangay"];

    // Validate password match
    if ($password !== $confirmPassword) {
        die("Password and Confirm Password do not match.");
    }

    // Hash the password using SHA-1 (for demonstration purposes; use a stronger method in production)
    $hashedPassword = sha1($password);

    // Insert data into the 'residents' table
    $sql = "INSERT INTO residents (username, password, phone_no, barangay) VALUES ('$username', '$hashedPassword', '$phone_no', '$barangay')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
