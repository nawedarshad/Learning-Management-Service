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

$statusId = isset($_GET['status_id']) ? (int) $_GET['status_id'] : 0;
$paymentData = null;

// Fetch payment data
if ($statusId > 0) {
    $stmt = $conn->prepare("SELECT * FROM payment_status WHERE status_id = ?");
    $stmt->bind_param("i", $statusId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $paymentData = $result->fetch_assoc();
    }
    $stmt->close();
}

// Check if the form has been submitted
if (isset($_POST["updateStatus"])) {
    // Start of your PHP tag and database connection code...

    // Assuming $conn is your database connection from earlier in the file

    if (isset($_POST["updateStatus"])) {
        $statusId = $_POST["statusId"]; // Ensure this field is included in your form
        $name = $_POST["name"];
        $email = $_POST["email"];
        $course = $_POST["course"];
        $status = $_POST["status"];
        $message = $_POST["message"];

        // Check if any of the required fields are empty
        if (empty($name) || empty($email) || empty($course) || empty($status) || empty($message) || empty($statusId)) {
            echo '<script type="text/javascript">alert("Fill all fields.");</script>';
        } else {

            // Prepare SQL statement to prevent SQL injection
            $stmt = $conn->prepare("UPDATE payment_status SET name=?, email=?, course=?, status=?, message=? WHERE status_id=?");
            $stmt->bind_param("sssssi", $name, $email, $course, $status, $message, $statusId);

            if ($stmt->execute()) {
                echo '<script type="text/javascript">alert("payment Updated Successfully");</script>';
                // Optionally redirect back to the payments list or somewhere else
                header("Location: payment.php");
                exit();
            } else {
                echo '<script type="text/javascript">alert("Failed to update payment");</script>';
            }

            $stmt->close();
        }
    }

    // Continue with your existing code to display the form...

}

$conn->close();
?>

<?php
include ("sidebar.php")

    ?>
<!-- HTML form for editing payment -->
<div class="container-fluid d-flex justify-content-center align-items-center" style="height:100vh; width:80vw">
    <div>

        <h2>Edit Payment</h2>
        <?php if ($paymentData): ?>
            <form method="post" action="">
                <input type="hidden" name="statusId" value="<?php echo $statusId; ?>">
                <div class="mb-5" style="width:50vw;">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="<?php echo htmlspecialchars($paymentData['name']); ?>">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        value="<?php echo htmlspecialchars($paymentData['email']); ?>">
                    <label for="course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="course" name="course"
                        value="<?php echo htmlspecialchars($paymentData['course']); ?>">
                    <label for="status" class="form-label">Choose an Option:</label>
                    <select id="status" name="status" class="form-control">
                        <option value="paid">Paid</option>
                        <option value="unpaid">Unpaid</option>
                    </select>
                    <label for="message" class="form-label">Course</label>
                    <input type="text" class="form-control" id="message" name="message"
                        value="<?php echo htmlspecialchars($paymentData['message']); ?>">
                </div>
                <!-- Add other fields here -->
                <button type="submit" class="btn btn-primary" name="updateStatus">Update payment</button>
            </form>
        <?php else: ?>
            <p>Status not found.</p>
        <?php endif; ?>
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