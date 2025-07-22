<?php
$dbuser = "root";
$dbpass = ""; // Step 1: Changed from "database-password" to ""
$host = "localhost";
$db = "hmisphp"; // Step 2: Changed from "database-name" to "hmisphp"

$mysqli = new mysqli($host, $dbuser, $dbpass, $db);

// Optional: Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>

