<?php
session_start();
$servername = "localhost"; // Change if your DB is hosted elsewhere
$username = "root"; // Change if you have a different DB username
$password = ""; // Change if your DB has a password
$dbname = "login_register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Prevent SQL Injection
    $full_name = $conn->real_escape_string($full_name);
    $email = $conn->real_escape_string($email);
    $subject = $conn->real_escape_string($subject);
    $message = $conn->real_escape_string($message);

    // Insert into the database
    $sql = "INSERT INTO contact1 (full_name, email, subject, message) VALUES ('$full_name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        header("Location: contact1.html");
        
    } else {
        echo "Error: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
