<?php
// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Connect to the MySQL database
$host = 'localhost'; // Change this if your MySQL server is hosted elsewhere
$dbUsername = 'sahil';
$dbPassword = 'iacsd@123';
$dbName = 'sahil';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO sahil (name, email, message) VALUES ('$name', '$email', '$message')";
if ($conn->query($sql) === TRUE) {
    header("Location: success.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
