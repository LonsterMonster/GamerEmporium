<?php
$servername = "localhost";
$username = "root";
$password = "cFeu11qJgQ8lNxhO";
$dbname = "gamer emporium";
$_Search = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>