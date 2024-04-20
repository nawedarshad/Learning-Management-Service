<?php

// Always start with these lines for better error handling.
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_host = "localhost";
$db_user = "u711597203_root";
$db_pass = "Nebosh@123";
$db_name = "u711597203_LMS_DB";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>