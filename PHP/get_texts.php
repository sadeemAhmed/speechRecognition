<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the last transcribed text
$sql = "SELECT text FROM speech_texts ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result === false) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['text'];
} else {
    echo "No text found";
}

// Close the connection
$conn->close();
?>
