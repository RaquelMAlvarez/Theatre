<?php


$hn = "localhost";
$un = "Admin";
$pw = "([hQMEfyyyTenxd(";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>