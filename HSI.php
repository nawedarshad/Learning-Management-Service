<?php

include("./header.php");

?>


<div class="container-fluid" style="padding-top: 100px;">
    <!-- Start Popular Courses -->
  <div class="container-fluid container px-4" id="featured-3">
    <h2 class="pb-2 border-bottom">HSI Courses</h2>
    <div class="row row-cols-1 row-cols-md-3 justify-content-center" id="courses-row" style="gap:50px;">
        <!-- Repeat this card structure for each course -->
        <div class="col">
            <div class="card h-100">
                <img src="image/medic.jpg" class="card-img-top" alt="Course Thumbnail">
                <div class="card-body">
                    <h5 class="card-title">Medic First Aid course</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <?php
                    if (isset($_SESSION["isLogin3"])) {
        echo '
        <a href="Courses/Medic-first-aid/Introduction/introduction.php" class="btn btn-success w-100">Access</a>
        ';
      } else {
        echo '
        <a href="login-medic-first-aid.php" class="btn btn-success w-100">Login</a>
        ';
      }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- End Popular Courses -->
</div>




<?php

include("./footer.php");

?>