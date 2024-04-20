<?php
session_start();
if (!isset($_SESSION["isAdminLogin"])) {
    header("Location: ../login.php");
    exit();
}
$db_host = "localhost";
$db_user = "u711597203_root";
$db_pass = "";
$db_name = "u711597203_LMS_DB";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$studentId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$studentData = null;

// Fetch student data
if ($studentId > 0) {
    $stmt = $conn->prepare("SELECT * FROM student_data WHERE course_id = ?");
    $stmt->bind_param("i", $studentId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $studentData = $result->fetch_assoc();
    }
    $stmt->close();
}

// Check if the form has been submitted
if (isset($_POST["updateStudent"])) {
    // Start of your PHP tag and database connection code...
    
    // Assuming $conn is your database connection from earlier in the file
    
    if (isset($_POST["updateStudent"])) {
        $studentId = $_POST["studentId"]; // Ensure this field is included in your form
        $StudentName = $_POST["StudentName"];
        $StudentEmail = $_POST["StudentEmail"];
        $courseId = $_POST["course_id"];
    
        // Check if any of the required fields are empty
        if (empty($StudentName) || empty($StudentEmail) || empty($courseId)) {
            echo '<script type="text/javascript">alert("Fill all fields.");</script>';
        } else {
    
            // Prepare SQL statement to prevent SQL injection
            $stmt = $conn->prepare("UPDATE student_data SET stu_name=?, stu_email=?, course_id=? WHERE stu_id=?");
            $stmt->bind_param("ssii", $StudentName, $StudentEmail, $courseId, $studentId);
    
            if ($stmt->execute()) {
                echo '<script type="text/javascript">alert("Student Updated Successfully");</script>';
                // Optionally redirect back to the students list or somewhere else
                header("Location: students.php");
                exit();
            } else {
                echo '<script type="text/javascript">alert("Failed to update student");</script>';
            }
    
            $stmt->close();
        }
    }
    
    // Continue with your existing code to display the form...
    
}

$conn->close();
?>

<?php
include("sidebar.php")

?>
<!-- HTML form for editing student -->
<div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh; width:80vw">
    <div >

        <h2>Edit Student</h2>
        <?php if ($studentData): ?>
    <form method="post" action="">
        <input type="hidden" name="studentId" value="<?php echo $studentId; ?>">
        <div class="mb-5" style="width:50vw;">
            <label for="StudentName" class="form-label">Name</label>
            <input type="text" class="form-control" id="StudentName" name="StudentName" value="<?php echo htmlspecialchars($studentData['stu_name']); ?>">
            <label for="StudentEmail" class="form-label">Email</label>
            <input type="text" class="form-control" id="StudentEmail" name="StudentEmail" value="<?php echo htmlspecialchars($studentData['stu_email']); ?>">
            <label for="course_id" class="form-label">Course ID</label>
            <input type="text" class="form-control" id="course_id" name="course_id" value="<?php echo htmlspecialchars($studentData['course_id']); ?>">
        </div>
        <!-- Add other fields here -->
        <button type="submit" class="btn btn-primary" name="updateStudent">Update Student</button>
    </form>
    <?php else: ?>
        <p>Student not found.</p>
        <?php endif; ?>
    </div>
</div>
</body>
<script>
    // Add 'active' class to the element with id 'courses'
    document.getElementById('student').classList.add('active');
    document.getElementById('student').classList.remove('link-body-emphasis');

    // Get all elements in the div with id 'sidebar'
    var items = document.getElementById('sidebar').getElementsByTagName('*');

    // Loop through all elements and remove 'active' class
    for (var i = 0; i < items.length; i++) {
        if (items[i].id !== 'student') { // Check if the id is not 'courses'
            items[i].classList.remove('active');
            items[i].classList.add('link-body-emphasis');
        }
    }


</script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/popper.js"></script>
<script src="../js/jquery.js"></script>
<script src="../js/all.min.js"></script> <!--Font Awesome -->

</html>