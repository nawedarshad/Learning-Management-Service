<?php

if (!isset($_SESSION)) {
    session_start();
}

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
if (!isset($_SESSION['isLogin'])) {
    # code...
}
if (isset($_POST["student_signup"]) && isset($_POST["student_email"]) && isset($_POST["student_pass"])) {
    
    $student_email = $_POST["student_email"];
    // Check if email already exists
    $checkEmailQuery = "SELECT stu_email FROM student_data WHERE stu_email = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $student_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists
        echo json_encode("Email Exists");
    } else {
        // Proceed to insert new student
        $student_pass = password_hash($_POST["student_pass"], PASSWORD_DEFAULT);
        $sql = $conn->prepare("INSERT INTO student_data (stu_email, stu_pass) VALUES (?, ?)");
        $sql->bind_param("ss", $student_email, $student_pass);

        if ($sql->execute()) {
            $_SESSION["isLogin"] = "true";
            $_SESSION["student_email_session"] = $student_email;
            echo json_encode("OK");
        } else {
            // Adding error reporting for the SQL query
            echo json_encode("Failed: " . $sql->error);
        }
    }
} else {
    echo json_encode("Invalid Request");
}
?>
