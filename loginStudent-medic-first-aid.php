<?php

if (!isset($_SESSION)) {
    session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_host = "localhost";
$db_user = "u711597203_root";
$db_pass = "Nebosh@123";
$db_name = "u711597203_LMS_DB";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["student_email"]) && isset($_POST["student_pass"])) {
    
    $student_email = $_POST["student_email"];
    $student_pass = $_POST["student_pass"];

    $sql = $conn->prepare("SELECT stu_pass FROM student_data WHERE stu_email = ? && course_id = 3");
    $sql->bind_param("s", $student_email);
    $sql->execute();
    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($student_pass == $row["stu_pass"]) {
            $_SESSION["isLogin3"] = "true";
            $_SESSION["student_email_session"] = $student_email;

            // Use PHP for redirection
            header('Location: Courses/Medic-first-aid/Introduction/introduction.php');
            exit();
        } else {
            // Output for handling by JavaScript or Ajax
            echo json_encode("Invalid");
        }
    } else {
        // Output for handling by JavaScript or Ajax
        echo json_encode("Invalid");
    }
} else {
    // Output for handling by JavaScript or Ajax
    echo json_encode("Error: Missing credentials.");
}

// Only set Content-Type header if you're actually outputting JSON
header('Content-Type: application/json');

?>
