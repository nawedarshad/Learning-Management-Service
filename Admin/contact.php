<?php
session_start();
if (!isset($_SESSION["isAdminLogin"])) {
    header("Location: ../login.php");
    exit();
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

// SQL to get feedback (assuming feedback is in the student_data table)
// Adjust this query according to your actual database schema
$sql = "SELECT contact_id, email, phone, subject, message FROM contact WHERE contact_id IS NOT NULL";
$result = $conn->query($sql);

// Previous database connection setup...

// Handling feedback deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete']) && isset($_POST['contact_id'])) {
    $contactIdToDelete = $_POST['contact_id'];
    $stmt = $conn->prepare("DELETE FROM contact WHERE contact_id = ?");
    $stmt->bind_param("i", $contactIdToDelete);

    if ($stmt->execute()) {
        // Optional: Add a session flash message or similar to confirm deletion after redirect
        // Redirect to the same page to see the changes
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo '<script type="text/javascript">alert("Failed to delete feedback");</script>';
    }
    $stmt->close();
}



?>



<!-- Start Sidebar -->

<?php
include ("sidebar.php");
?>

<!-- End Sidebar -->
<div class="container tableContainer" style="width: 80vw; padding-left:10px;">
    <div class="d-flex align-items-center justify-content-center py-5">
        <h1>Contact Request</h1>
    </div>
    <div class="d-flex align-items-center justify-content-center py-5">
        <table class="table" style="width: 65vw;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Contact ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Message</th>

                    <th scope="col" style="width: 50px;">Delete</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $row["contact_id"]; ?>
                            </th>
                            <td>
                                <?php echo $row["email"]; ?>
                            </td>
                            <td>
                                <?php echo $row["phone"]; ?>
                            </td>
                            <td>
                                <?php echo $row["subject"]; ?>
                            </td>
                            <td>
                                <?php echo $row["message"]; ?>
                            </td>
                            <td>
                                <form method="post" action="">
                                    <input type="hidden" name="contact_id" value="<?php echo $row['contact_id']; ?>">
                                    <button type="submit" class="btn btn-danger" name="delete"
                                        onclick="return confirm('Are you sure you want to delete this feedback?');">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>


                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='6'>No Contact Request found</td></tr>";
                }
                ?>
            </tbody>
        </table>
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
    document.getElementById('contact').classList.add('active');
    document.getElementById('contact').classList.remove('link-body-emphasis');

    // Get all elements in the div with id 'sidebar'
    var items = document.getElementById('sidebar').getElementsByTagName('*');

    // Loop through all elements and remove 'active' class
    for (var i = 0; i < items.length; i++) {
        if (items[i].id !== 'contact') { // Check if the id is not 'courses'
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