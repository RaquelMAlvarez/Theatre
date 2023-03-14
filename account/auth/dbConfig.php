<?php
$hn = "localhost";
// this will be changed to  your username
$un = "raquel";
// this will be your user password
$pw = "*iz1yqG6.fwPoHic/";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>