<?php
 session_start();
// if (!isset($_SESSION["isAdminLogin"])) {
//     header("Location: ../login.php");
//     exit();
// }

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_host = "localhost";
$db_user = "u711597203_root";
$db_pass = "";
$db_name = "u711597203_LMS_DB";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/json');

if (isset($_POST["admin_email"]) && isset($_POST["admin_pass"])) {
    
    $admin_email = $_POST["admin_email"];
    $admin_pass = $_POST["admin_pass"];

    // Adjust the SQL query to check both email and password directly in the database
    $sql = $conn->prepare("SELECT admin_email FROM admin_data WHERE admin_email = ? AND admin_pass = ?");
    // Bind both the email and password parameters
    $sql->bind_param("ss", $admin_email, $admin_pass);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        // Directly login if the user is found, no need to verify password separately
        $_SESSION["isAdminLogin"] = "true";
        $_SESSION["admin_email_session"] = $admin_email;
        echo json_encode("Success");
    } else {
        echo json_encode("Invalid");
    }
} else {
    echo json_encode("Error: Missing credentials.");
}
?>
