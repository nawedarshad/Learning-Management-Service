<?php
include("header.php");
?>
<div class="container-fluid container px-4" id="featured-3" style="padding:100px 0px;">
    <h2 class="pb-2 border-bottom">OTHM Courses</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
            <div class="card h-100" >
                <img src="image/othm.jpg" class="card-img-top" alt="Course Thumbnail">
                <div class="card-body">
                    <h5 class="card-title">OTHM Level 6<br>Diploma in Occupational Health and Safety</h5>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                    <?php
                    if (isset($_SESSION["isLogin"])) {
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
        <div class="card h-100" >
                <img src="image/othm.jpg" class="card-img-top" alt="Course Thumbnail" >
                <div class="card-body">
                    <h5 class="card-title">OTHM Level 7<br>Diploma in Occupational Health and Safety</h5>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
        <!--<a href="Courses/OTHM/course-introduction/overview.php" class="btn btn-success w-100">Access</a>-->
                    <?php
                    if (isset($_SESSION["isLogin4"])) {
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
  </div>
  </div>
 
<?php
include("footer.php");
?>