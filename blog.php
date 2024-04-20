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
          <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
          <li class="nav-item"><a class="nav-link active" href="blog.php">Blogs</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          </ul>
          </div>
          </div>
          </nav >
          
          
          <!--End Navigation-->
        
<main>

  <section class="text-center container" style="padding-top:100px;">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-12 mx-auto">
        <h1 class="fw-light">Safe Plus Blogs</h1>
        <p class="lead text-muted">Welcome to our Safety First Blog, where expertise meets everyday application. Dive into the latest insights, tips, and stories designed to empower your journey toward a safer workplace.</p>
      </div>
    </div>
  </section>

  <div class="album py-5">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://images.pexels.com/photos/1216589/pexels-photo-1216589.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
            <div class="card-body">
              <p class="card-text">In today’s workplace, safety is more than a priority—it's a necessity. From construction sites to corporate offices, understanding the principles of safety and health is crucial for every industry. </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="blogs/blog1.php"><button type="button" class="btn btn-sm btn-outline-secondary">Read More</button></a>
                  <!--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <!--<div class="col">-->
        <!--  <div class="card shadow-sm">-->
        <!--    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->

        <!--    <div class="card-body">-->
        <!--      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
        <!--      <div class="d-flex justify-content-between align-items-center">-->
        <!--        <div class="btn-group">-->
        <!--          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>-->
        <!--          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>-->
        <!--        </div>-->
        <!--        <small class="text-muted">9 mins</small>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
      </div>
    </div>
  </div>

</main>

<?php
include("footer.php");
?>