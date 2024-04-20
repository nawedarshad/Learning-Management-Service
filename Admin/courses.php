<?php
session_start();
if (!isset($_SESSION["isAdminLogin"])) {
    header("Location: ../login.php");
    exit();
}
// Place this PHP code at the top of your file
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the edit button was clicked
    if (isset($_POST['edit'])) {
        $courseIdToEdit = $_POST['courseId'];
        // Redirect to the edit course page with the course ID
        header("Location: editCourse.php?id=$courseIdToEdit");
        exit();
    }

    // Check if the delete button was clicked
    if (isset($_POST['delete'])) {
        $courseIdToDelete = $_POST['courseId'];
        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("DELETE FROM courses WHERE course_id = ?");
        $stmt->bind_param("i", $courseIdToDelete);

        if ($stmt->execute()) {
            echo '<script type="text/javascript">alert("Course Deleted Successfully");</script>';
        } else {
            echo '<script type="text/javascript">alert("Failed to delete course");</script>';
        }

        $stmt->close();
    }
}




// Database configuration
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

// SQL to get courses
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
?>

<!-- Start Sidebar -->

<?php
    include("sidebar.php");
?>

            <!-- End Sidebar -->
            <div class="container tableContainer" style="width: 80vw; padding-left:10px;">
                <div class="d-flex align-items-center justify-content-center py-5">
                    <h1>Courses</h1>
                </div>
                <div class="d-flex align-items-center justify-content-center py-5">
                    <table class="table" style="width: 65vw;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">course id</th>
                                <th scope="col">course name</th>
                                <th scope="col">course description</th>
                                <th scope="col">course price</th>
                                <th scope="col">course teacher</th>
                                <th scope="col" style="width: 50px;">Edit/Delete</th>
                            </tr>
                        </thead>
                        <tbody class="table-hover">
                            <?php
                            if ($result && $result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $row["course_id"]; ?>
                                        </th>
                                        <td>
                                            <?php echo $row["course_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["course_description"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["course_price"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["course_teacher"]; ?>
                                        </td>
                                        <td>
                                            <form method="post" action="">
                                                <input type="hidden" name="courseId" value="<?php echo $row['course_id']; ?>">
                                                <button type="submit" class="btn btn-info" name="edit">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                                <button type="submit" class="btn btn-danger" name="delete"
                                                    onclick="return confirm('Are you sure you want to delete this course?');">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "<tr><td colspan='6'>No courses found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- Button to add course -->
                <div class="d-flex justify-content-end" style="position: sticky; bottom: 3%;">
                    <a href="addCourse.php" class="btn btn-danger btn-lg">+</a>
                </div>
            </div>

            <?php
            $conn->close();
            ?>

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