<?php

if (!isset($_SESSION)) {
    session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "lms_db";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if (!isset($_SESSION["student_email_session"])) {
    // Redirect to the login page if the session variable is not set.
    header("Location: ../../login.php");
    exit();
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$student_email = $_SESSION["student_email_session"];
$course_id_to_check = 1;

// Prepare the SQL statement using mysqli
$stmt = $conn->prepare("SELECT * FROM student_data WHERE stu_email = ? AND course_id = ?");
$stmt->bind_param("si", $student_email, $course_id_to_check);

// Execute the query
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row) {
    // The user is enrolled in course_id 1
    header("Location: OTHM.php");
    exit();
} else {
    // The user is not enrolled in course_id 1
    echo "You are not Enrolled in this course";
    exit();
}
?>
