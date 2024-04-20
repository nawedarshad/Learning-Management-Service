<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Declare the content type of the response as JSON
header('Content-Type: application/json');

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "lms_db";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die(json_encode("Connection failed: " . $conn->connect_error));
}

if (isset($_POST["email"])) {

    $email = $_POST["email"];

    // Prepare the SQL statement
    $sql = $conn->prepare("INSERT INTO subscriber (email) VALUES (?)");
    $sql->bind_param("s", $email);

    // Attempt to execute the prepared statement
    if ($sql->execute()) {
        // Successfully inserted the email
        echo json_encode("OK");
    } else {
        // Check for duplicate entry
        if ($conn->errno == 1062) {
            echo json_encode("Email Exists");
        } else {
            // Report other SQL errors
            echo json_encode("Failed: " . $sql->error);
        }
    }
} else {
    echo json_encode("Invalid Request");
}

// Close connection
$conn->close();
?>