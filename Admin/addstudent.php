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

if (isset($_POST["courseSubmit"])) {
    // Check if any of the required fields are empty
    if (empty($_POST["StudentName"]) || empty($_POST["StudentEmail"]) || empty($_POST["password"])) {
        echo '<script type="text/javascript">alert("Fill all Fields");</script>';
    } else {
        $password = $_POST["password"];
        $StudentName = $_POST["StudentName"];
        $StudentEmail = $_POST["StudentEmail"];
        $courseId = $_POST["courseId"];

        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO student_data (stu_name, stu_email, stu_pass, course_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $StudentName, $StudentEmail, $password, $courseId); // 's' for strings, 'i' for integers

        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Student Added Successfully");</script>';
        } else {
            echo '<script type="text/javascript">alert("Failed to add course");</script>';
        }
        
        $stmt->close();
    }
}
$conn->close();
?>



<?php
    include("sidebar.php");
?>

<!-- End Sidebar -->
<div class="container tableContainer" style="width: 80vw; padding-left:10px;">
    <div class="d-flex align-items-center justify-content-center py-5">
        <h1>Add Students</h1>
    </div>
    <!-- Form -->

    <form method="post" action="">
  <div class="mb-3">
    <label for="StudentName" class="form-label">Name</label>
    <input type="text" class="form-control" id="StudentName" name="StudentName" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="StudentEmail" class="form-label">Email</label>
    <input type="text" name="StudentEmail" id="StudentEmail" class="form-control">
    <!-- <textarea cols="142" rows="10" placeholder="Course Description"></textarea> -->
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="courseId" class="form-label">Course ID</label>
    <input type="text" name="courseId" class="form-control" id="courseId">
  </div>
  </div>
  <button type="submit" class="btn btn-primary" id="courseSubmit" name="courseSubmit">Submit</button>
</form>

    <!-- End Form -->

    
</div>
</div>
  </div>

</body>
<script>
    // Add 'active' class to the element with id 'courses'
document.getElementById('students').classList.add('active');
document.getElementById('students').classList.remove('link-body-emphasis');

// Get all elements in the div with id 'sidebar'
var items = document.getElementById('sidebar').getElementsByTagName('*');

// Loop through all elements and remove 'active' class
for (var i = 0; i < items.length; i++) {
    if (items[i].id !== 'students') { // Check if the id is not 'courses'
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