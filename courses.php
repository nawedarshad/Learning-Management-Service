<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


?>
  
  <!DOCTYPE html>
  <html lang="en">
    
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.55">
    
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
      <li class="nav-item"><a class="nav-link active" href="courses.php">Courses</a></li>
      
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
          <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
          <li class="nav-item"><a class="nav-link" href="blog.php">Blogs</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          </ul>
          </div>
          </div>
          </nav >
          
          
          <!--End Navigation-->
        


<div class="container-fluid" style="padding-top: 100px;">
    <!-- Start Popular Courses -->
  <div class="container-fluid container px-4" id="featured-3">
    <h2 class="pb-2 border-bottom">Popular Courses</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
            <div class="card h-100">
                        <img src="image/oil and gas.avif" class="card-img-top" alt="Course Thumbnail">
                        <div class="card-body">
                            <h5 class="card-title">Oil and Gas Opertional Safety</h5>
                            <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                            <?php
                            if (isset($_SESSION["isLogin2"])) {
                echo '
                <a href="Courses/Oil-and-gas/unit1.php" class="btn btn-success w-100">Access</a>
                ';
              } else {
                echo '
                <a href="login-oil-and-gas.php" class="btn btn-success w-100">Login</a>
                ';
              }
                            ?>
                        </div>
            </div>
    </div>
  <div class="col">
    <div class="card h-100">
                <img src="image/industrail safety.jpg" class="card-img-top" alt="Course Thumbnail" >
                <div class="card-body">
                    <h5 class="card-title">Industrial Safety Management</h5>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                    <?php
                    if (isset($_SESSION["isLogin3"])) {
        echo '
        <a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>
        ';
      } else {
        echo '
        <a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Login</a>
        ';
      }
                    ?>
                </div>
    </div>
</div>

        <div class="col">
<div class="card h-80">
                <img src="image/hsi.avif" class="card-img-top" alt="Course Thumbnail" >
                <div class="card-body">
                    <h5 class="card-title">HSI Courses</h5>
                    <p class="card-text"><br></p>
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
        <a href="HSI.php" class="btn btn-success w-100">View Courses</a>
                </div>
            </div>
</div> 
  <div class="col">
        <div class="card h-8" >
                <img src="image/othm.jpg" class="card-img-top" alt="Course Thumbnail" >
                <div class="card-body">
                    <h5 class="card-title"><br>OTHM Courses</h5>
                    <p class="card-text pb-2"><br></p>
                    <a href="othm-courses.php" class="btn btn-success w-100">View Courses</a>
                </div>
        </div>
  </div>

<div class="col">
<div class="card h-100">
                <img src="image/OSHA.jpg" class="card-img-top" alt="Course Thumbnail" >
                <div class="card-body">
                    <h5 class="card-title">OSHA Courses</h5>
                    <p class="card-text"><br></p>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
        <a href="osha-courses.php" class="btn btn-success w-100">View Courses</a>
                </div>
            </div>
</div>            
<div class="col">
<div class="card h-100">
                <img src="image/aosh1.jpg" class="" alt="Course Thumbnail" style="200px;">
                <div class="card-body">
                    <h5 class="card-title"><br><br><br>AOSH Courses</h5>
                    <p class="card-text"><br></p>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
        <a href="aosh-courses.php" class="btn btn-success w-100">View Courses</a>
                </div>
            </div>
</div>            
<div class="col">
<div class="card h-100">
                <img src="https://www.pillarmanagement.com/images/Training-Room-ISO-9001-Lead-Auditor-Training.jpg" class="" alt="Course Thumbnail" style="200px;">
                <div class="card-body">
                    <h5 class="card-title"><br>LEAD AUDITOR Courses</h5>
                    <p class="card-text"><br></p>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
        <a href="aosh-courses.php" class="btn btn-success w-100">View Courses</a>
                </div>
            </div>
</div>            
<div class="col">
<div class="card h-100">
                <img src="https://safeplusacademy.com/wp-content/uploads/2023/06/web5f.jpg" class="" alt="Course Thumbnail" style="200px;">
                <div class="card-body">
                    <h5 class="card-title pb-3"><br>ADIS (Advanced Diploma in Industrial Safety & Fire Management)</h5>
                    <p class="card-text"></p>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
        <a href="aosh-courses.php" class="btn btn-success w-100">View Courses</a>
                </div>
            </div>
</div>            
<div class="col">
<div class="card h-100">
                <img src="https://safeplusacademy.com/wp-content/uploads/2023/06/Manufacturing-plant-safety-face-masks-getty.jpg" class="" alt="Course Thumbnail" style="200px;">
                <div class="card-body">
                    <h5 class="card-title pb-3"><br>Autonomous Safety Diploma</h5>
                    <p class="card-text"></p>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
        <a href="aosh-courses.php" class="btn btn-success w-100">View Courses</a>
                </div>
            </div>
</div>            
<div class="col">
<div class="card h-100">
                <img src="https://centragama.com/wp-content/uploads/2018/11/Process-Safety-Management-Training.png" class="" alt="Course Thumbnail" style="200px;">
                <div class="card-body">
                    <h5 class="card-title pb-3">Process Safety Management</h5>
                    <p class="card-text"></p>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
        <a href="aosh-courses.php" class="btn btn-success w-100">View Courses</a>
                </div>
            </div>
</div>            
<div class="col">
<div class="card h-100">
                <img src="http://safeplusacademy.com/wp-content/uploads/2024/02/41827Esp.jpeg" class="" alt="Course Thumbnail" style="200px;">
                <div class="card-body">
                    <h5 class="card-title pb-3">Autonomous short term CPD Certification (ISO APPROVED)</h5>
                    <p class="card-text"></p>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
        <a href="aosh-courses.php" class="btn btn-success w-100">View Courses</a>
                </div>
            </div>
</div>            

</div>
</div>





    <!-- End Popular Courses -->
</div>


<script>
    fo
</script>

<?php

include("./footer.php");

?>