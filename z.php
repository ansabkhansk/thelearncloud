<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12665056";
$password = "6JYxudJJhk";
$dbname = "sql12665056";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close the connection
$conn->close();
?>
