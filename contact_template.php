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

if (isset($_POST["student_email"]) && isset($_POST["student_phone"]) && isset($_POST["subject"]) && isset($_POST["student_message"])) {

    $student_email = $_POST["student_email"];
    $student_phone = $_POST["student_phone"];
    $subject = $_POST["subject"];
    $student_message = $_POST["student_message"];

    // Prepare the SQL statement
    $sql = $conn->prepare("INSERT INTO contact (email, phone, subject, message) VALUES (?, ?, ?, ?)");

    // Bind the parameters
    $sql->bind_param("ssss", $student_email, $student_phone, $subject, $student_message);

    // Execute the statement
    if ($sql->execute()) {
        echo "Email Sent";
        sleep(4);
        header("Location: index.php");
    } else {
        echo "Error: " . $sql->error;
    }

    // Close the prepared statement
    $sql->close();
} else {
    
    echo "<script>documentStudent email and Phone Number and  are required.</script>";
}

// Close the database connection
$conn->close();
?>



<section class="vh-200 py-5" style="background-color: white; padding-bottom:150px;" >
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="image/contact 1.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Contact Us</span>
                                        </div>

                                            <!-- Logo and heading omitted for brevity -->

                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example17" name="student_email"
                                                    class="form-control form-control-lg" required />
                                                <label class="form-label" for="form2Example17">Email address</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="number" id="form2Example17" name="student_phone"
                                                    class="form-control form-control-lg" required />
                                                <label class="form-label" for="form2Example17">Phone Number</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="text" id="form2Example27" name="subject"
                                                    class="form-control form-control-lg" required ></input>
                                                <label class="form-label" for="form2Example27">Subject</label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <textarea type="text" id="form2Example27" name="student_message"
                                                    class="form-control form-control-lg" required ></textarea>
                                                <label class="form-label" for="form2Example27">Message</label>
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