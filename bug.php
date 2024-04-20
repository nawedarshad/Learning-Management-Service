<?php

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

if (isset($_POST["bug_url"]) && isset($_POST["bug_message"])) {
    
    $bug_url = $_POST["bug_url"];
    $bug_message = $_POST["bug_message"];

    // Prepare the SQL statement
    $sql = $conn->prepare("INSERT INTO bugs_report (bug_url, bug) VALUES (?, ?)");
    
    // Bind the parameters
    $sql->bind_param("ss", $bug_url, $bug_message);
    
    // Execute the statement
    if ($sql->execute()) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql->error;
    }

    // Close the prepared statement
    $sql->close();
} else {
    echo "Student email and feedback are required.";
}

// Close the database connection
$conn->close();


include("header.php");

?>
    <section class="vh-100" style="background-image: url('image/OIP.jpeg');">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            
                            <div class="p-5">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Bugs Report</span>
                                        </div>

                                            <!-- Logo and heading omitted for brevity -->

                                            <div class="form-outline mb-4">
                                                <input type="text" id="form2Example17" name="bug_url"
                                                    class="form-control form-control-lg" required />
                                                <label class="form-label" for="form2Example17">Bug Page URL</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <textarea type="text" id="form2Example27" name="bug_message"
                                                    class="form-control form-control-lg" required ></textarea>
                                                <label class="form-label" for="form2Example27">What is the bug?</label>
                                            </div>

                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Submit</button>
                                   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
include("footer.php");

?>