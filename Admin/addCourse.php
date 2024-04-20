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
    if (empty($_POST["CourseName"]) || empty($_POST["CourseDescription"]) || empty($_POST["price"]) || empty($_POST["teacher"])) {
        echo '<script type="text/javascript">alert("Fill all Fields");</script>';
    } else {
        $courseName = $_POST["CourseName"];
        $courseDescription = $_POST["CourseDescription"];
        $price = $_POST["price"];
        $teacher = $_POST["teacher"];

        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO courses (course_name, course_description, course_price, course_teacher) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $courseName, $courseDescription, $price, $teacher); // 's' for strings, 'i' for integers

        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Course Added Successfully");</script>';
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
        <h1>Add Courses</h1>
    </div>
    <!-- Form -->

    <form method="post" action="">
  <div class="mb-3">
    <label for="CourseName" class="form-label">Course Name</label>
    <input type="text" class="form-control" id="CourseName" name="CourseName" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="CourseDescription" class="form-label">Course Description</label>
    <input type="text" name="CourseDescription" id="CourseDescription" class="form-control">
    <!-- <textarea cols="142" rows="10" placeholder="Course Description"></textarea> -->
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" name="price" class="form-control" id="price">
  </div>
  <div class="mb-3">
    <label for="teacher" class="form-label">Teacher</label>
    <input type="text" name="teacher" class="form-control" id="teacher">
  </div>
  <div class="mb-3">
    <label for="wallpaper" class="form-label">Course Wallpaper</label>
    <input type="file" class="form-control" id="wallpaper">
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
document.getElementById('courses').classList.add('active');
document.getElementById('courses').classList.remove('link-body-emphasis');

// Get all elements in the div with id 'sidebar'
var items = document.getElementById('sidebar').getElementsByTagName('*');

// Loop through all elements and remove 'active' class
for (var i = 0; i < items.length; i++) {
    if (items[i].id !== 'courses') { // Check if the id is not 'courses'
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