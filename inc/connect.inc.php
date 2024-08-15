<?php 
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "daowat_db"; // Your database name

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Time format function
function formatDate($date){
    return date('F j, Y, g:i a', strtotime($date));
}
?>
