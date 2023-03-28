<?php
$hn = "localhost";
// this will be changed to  your username
$un = "Admin";
// this will be your user password
$pw = "@YJs90G/GJu[wOiO";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>