<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database credentials
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

// Log request method and received data
file_put_contents('debug.log', "Request method: " . $_SERVER["REQUEST_METHOD"] . "\n", FILE_APPEND);
file_put_contents('debug.log', "Post data: " . print_r($_POST, true) . "\n", FILE_APPEND);

// Check if request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['text'])) {
        die("No text received");
    }

    // Escape user input for security
    $text = $conn->real_escape_string($_POST['text']);
    
    // Log the escaped text
    file_put_contents('debug.log', "Escaped text: " . $text . "\n", FILE_APPEND);

    // SQL query to insert the text into the speech_texts table
    $sql = "INSERT INTO speech_texts (text) VALUES ('$text')";

    // Execute query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    die("Invalid request method");
}

// Close connection
$conn->close();
?>
