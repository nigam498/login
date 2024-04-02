<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "usersdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from POST request
$username = $_POST["username"];
$password = $_POST["password"];

// SQL query to check if username and password exist in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    echo "Login successful!";
} else {
    // Login failed
    echo "Invalid username or password";
}

$conn->close();
?>
