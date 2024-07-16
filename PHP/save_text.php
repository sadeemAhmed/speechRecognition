<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database credentials
$servername = "sql301.infinityfree.com";
$username = "if0_36865380";
$password = "987joystick123";
$dbname = "record";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user input for security
    $text = $conn->real_escape_string($_POST['text']);
    
    // SQL query to insert the text into the speech_texts table
    $sql = "INSERT INTO speech_texts (text) VALUES ('$text')";

    // Execute query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

