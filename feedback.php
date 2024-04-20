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

if (isset($_POST["student_email"]) && isset($_POST["student_feedback"])) {
    
    $student_email = $_POST["student_email"];
    $student_feedback = $_POST["student_feedback"];

    // Prepare the SQL statement
    $sql = $conn->prepare("INSERT INTO feedback (email, feedback) VALUES (?, ?)");
    
    // Bind the parameters
    $sql->bind_param("ss", $student_email, $student_feedback);
    
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


?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


?>
  
  <!DOCTYPE html>
  <html lang="en">
    
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.48">
    
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/heroes/hero-3/assets/css/hero-2.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <title>Safe Plus E-Learning Portal</title>
    
    <script src="jquery.js"></script>
    <!-- Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    
    <!-- CSS only -->
    
    

  </head>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <body>
    
  <!-- Start Navigation -->
  
  <nav class="navbar navbar-expand-lg pl-5 fixed-top navbar-expand-lg navbar-light bg-light" style="background-color: white;">
    <div class="container-fluid">
      <img src="http://safeplusacademy.com/wp-content/uploads/2023/06/cropped-hvhv.png" style="height: 70px;">
      <a class="navbar-brand" href="https://elearning.safeplusacademy.com/LMS/index.php" style="color:#198754;"><b>Safe Plus Academy E-Learning</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto pl-5"> <!-- Added ms-auto here -->
      <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
      
      <?php
      
      if (isset($_SESSION["isLogin"]) || isset($_SESSION["isLogin2"]) || isset($_SESSION["isLogin3"])) {
        echo '
        <!-- <li class="nav-item"><a class="nav-link" href="Student/profile.php">My Profile</a></li> -->
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        ';
      } else {
        echo '
        
        ';
      }
      
      ?>
          <li class="nav-item"><a class="nav-link active" href="feedback.php">Feedback</a></li>
          <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          </ul>
          </div>
          </div>
          </nav >
          
          
          <!--End Navigation-->
        
    <section class="vh-100" style="background-color: #E3FDFD;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="image/feedback.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Feedback</span>
                                        </div>

                                            <!-- Logo and heading omitted for brevity -->

                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example17" name="student_email"
                                                    class="form-control form-control-lg" required />
                                                <label class="form-label" for="form2Example17">Email address</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <textarea type="text" id="form2Example27" name="student_feedback"
                                                    class="form-control form-control-lg" required ></textarea>
                                                <label class="form-label" for="form2Example27">Feedback</label>
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