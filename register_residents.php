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

    // Check if the phone number already exists in the 'residents' table
    $checkSql = "SELECT * FROM residents WHERE phone_no = '$phone_no'";
    $result = $conn->query($checkSql);

    if ($result->num_rows > 0) {
        // If the phone number exists, update the existing row with the new username and password
        $updateSql = "UPDATE residents SET username = '$username', password = '$hashedPassword', barangay = '$barangay' WHERE phone_no = '$phone_no'";
        
        if ($conn->query($updateSql) === TRUE) {
            echo "User data updated!";
            header("Location: index.php"); // Redirect to index.php
            exit();
        } else {
            echo "Error updating user data: " . $conn->error;
        }
    } else {
        // If the phone number does not exist, insert a new row
        $insertSql = "INSERT INTO residents (username, password, phone_no, barangay) VALUES ('$username', '$hashedPassword', '$phone_no', '$barangay')";
        
        if ($conn->query($insertSql) === TRUE) {
            echo "Registration successful! Redirecting...";
            header("Location: index.php"); // Redirect to index.php
            exit();
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>
