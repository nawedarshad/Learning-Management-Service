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
    if (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["course"]) || empty($_POST["status"]) || empty($_POST["message"])) {
        echo '<script type="text/javascript">alert("Fill all Fields");</script>';
    } else {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $course = $_POST["course"];
        $status = $_POST["status"];
        $message = $_POST["message"];

        // Prepare SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO payment_status (name, email, course, status, message) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $course, $status, $message); // 's' for strings, 'i' for integers

        if ($stmt->execute()) {
            header("Location: payment.php");
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
include ("sidebar.php");
?>

<!-- End Sidebar -->
<div class="container tableContainer" style="width: 80vw; padding-left:10px;">
    <div class="d-flex align-items-center justify-content-center py-5">
        <h1>Add Payment Status</h1>
    </div>
    <!-- Form -->

    <form method="post" action="">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control">
            <!-- <textarea cols="142" rows="10" placeholder="Course Description"></textarea> -->
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Course</label>
            <input type="text" name="course" id="course" class="form-control">
            <!-- <textarea cols="142" rows="10" placeholder="Course Description"></textarea> -->
        </div>
        <div class="mb-3">
            <label for="status">Choose an Option:</label>
            <select id="status" name="status">
                <option value="paid">Paid</option>
                <option value="unpaid">Unpaid</option>
            </select>
        </div>
        <div class="mb-3">
            <textarea class="form-label" type="text" name="message" class="form-control" id="message" cols="100"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" id="courseSubmit" name="courseSubmit">Submit</button>
    </form>
</div>

<!-- End Form -->


</div>
</div>
</div>

</body>
<script>
    // Add 'active' class to the element with id 'courses'
    document.getElementById('payment').classList.add('active');
    document.getElementById('payment').classList.remove('link-body-emphasis');

    // Get all elements in the div with id 'sidebar'
    var items = document.getElementById('sidebar').getElementsByTagName('*');

    // Loop through all elements and remove 'active' class
    for (var i = 0; i < items.length; i++) {
        if (items[i].id !== 'payment') { // Check if the id is not 'courses'
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