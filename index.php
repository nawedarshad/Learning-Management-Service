<?php
include ("./header.php")
    ?>

<!-- Start Couresel -->
<!-- Hero 3 - Bootstrap Brain Component -->
<!-- Hero 2 - Bootstrap Brain Component -->
<section class="bsb-hero-2 px-3" style="padding-top: 100px">
  <div class="container overflow-hidden">
    <div class="row gy-3 gy-lg-0 align-items-lg-center justify-content-lg-between">
      <div class="col-12 col-lg-6 order-1 order-lg-0">
        <h1 class="display-3 fw-bold mb-3">Learn Smarter not Harder</h1>
        <p class="fs-4 mb-5">Our Learning Management System is designed to streamline the educational experience for both teachers and students. With a focus on intuitive design and robust functionality, our platform facilitates a seamless connection between curriculum and technology. </p>
        <div class="d-grid gap-2 d-sm-flex">
          <a href="contact.php" <button type="button" class="btn btn-success bsb-btn-3xl rounded-pill">Register for a course</button> </a>
        </div>
      </div>
      <div class="col-12 col-lg-5 text-center">
        <img class="img-fluid" loading="lazy" src="image/index.webp" alt="">
      </div>
    </div>
  </div>
</section>
<!-- End Couresel -->

<!-- start text banner -->

<div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Features</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">

            <h3 class="fs-2 text-body-emphasis">Interactive Content</h3>
            <p>Engaging content formats, such as videos, quizzes, and interactive simulations, help improve retention
                and understanding of the material.</p>
        </div>
        <div class="feature col">
            <h3 class="fs-2 text-body-emphasis">Progress Tracking</h3>
            <p>Tools that allow learners to track their progress through courses and assessments help them stay
                motivated and identify areas needing additional focus.</p>
        </div>
        <div class="feature col">
            <h3 class="fs-2 text-body-emphasis">User-Friendly Interface</h3>
            <p>An intuitive and easy-to-navigate interface helps learners find courses, view content, and track their
                progress with minimal effort.</p>
        </div>
    </div>
</div>
<!-- End text banner -->

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

<!-- Start banner -->

<!-- Featured 1 - Bootstrap Brain Component -->
<section class="py-3 py-md-5 py-xl-8 bg-light">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="display-5 mb-4 mb-md-5 text-center">Featured</h2>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <article>
      <div class="card">
        <div class="row g-0">
          <div class="col-12 col-md-6 order-1 order-md-0 d-flex align-items-center">
            <div class="card-body p-md-4 p-xl-6 p-xxl-9">
              <div class="entry-header mb-3">
                <ul class="entry-meta list-unstyled d-flex mb-4">
                  <li>
                    <a class="d-inline-flex px-2 py-1 link-primary text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-2 text-decoration-none" href="#!">Safety Officer</a>
                  </li>
                </ul>
                <h2 class="card-title entry-title display-3 fw-bold mb-4 lh-1">
                  <a class="link-dark text-decoration-none" href="#!">Empower Your Career with Our Safety Courses</a>
                </h2>
              </div>
              <p class="card-text entry-summary text-secondary mb-4">
                In today’s workplace, safety is more than a priority—it's a necessity. From construction sites to corporate offices, understanding the principles of safety and health is crucial for every industry. 
              </p>
              <div class="entry-footer">
                <ul class="entry-meta list-unstyled d-flex align-items-center m-0">
                  <li>
                    <a class="fs-7 link-secondary text-decoration-none d-flex align-items-center" href="#!">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                      </svg>
                      <span class="ms-2 fs-7">13 Apr 2030</span>
                    </a>
                  </li>
                </ul>
                <div class="d-grid gap-2 d-sm-flex pt-4">
          <a href="blog.php" <button type="button" class="btn btn-success bsb-btn-3xl">Read Blogs</button> </a>
        </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex">
            <img class="img-fluid rounded-end object-fit-cover " loading="lazy" src="https://images.pexels.com/photos/901941/pexels-photo-901941.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Entrepreneurship">
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

<!-- End banner -->

    <!-- Start Review -->

   <!-- Testimonial 4 - Bootstrap Brain Component -->
<<!-- Testimonial 3 - Bootstrap Brain Component -->
<section class="bg-light py-5 py-xl-8">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="fs-6 text-secondary mb-2 text-uppercase text-center">Happy Customers</h2>
        <p class="display-5 mb-4 mb-md-5 text-center">We deliver what we promise. See what clients are expressing about us.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container overflow-hidden">
    <div class="row gy-4 gy-md-0 gx-xxl-5">
      <div class="col-12 col-md-4">
        <div class="card border-0 border-bottom border-primary shadow-sm">
          <div class="card-body p-4 p-xxl-5">
            <figure>
              <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="https://www.chicagotongueties.com/assets/images/symptoms-4.jpg" alt="" style="height:100px;">
              <figcaption>
                <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                <blockquote class="bsb-blockquote-icon mb-4">Our institution recently switched to this LMS, and we couldn't be happier with the decision. The customization options allow us to tailor the experience to our needs, and the analytics features are invaluable for tracking student progress and outcomes.</blockquote>
                <h4 class="mb-2">Rohan Sharma</h4>
                <h5 class="fs-6 text-secondary mb-0">Student</h5>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card border-0 border-bottom border-primary shadow-sm">
          <div class="card-body p-4 p-xxl-5">
            <figure>
              <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="https://th.bing.com/th/id/OIP.x-miHH1Prrgf2LeAH5klMgHaHa?rs=1&pid=ImgDetMain" alt="" style="height:100px;">
              <figcaption>
                <div class="bsb-ratings text-warning mb-3" data-bsb-star="4" data-bsb-star-off="1"></div>
                <blockquote class="bsb-blockquote-icon mb-4">As a student, I appreciate how straightforward and accessible this LMS is. The mobile compatibility means I can learn on the go, and the interactive elements keep me engaged. <br><br><br></blockquote>
                <h4 class="mb-2">Merazul Hassan</h4>
                <h5 class="fs-6 text-secondary mb-0">Student</h5>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card border-0 border-bottom border-primary shadow-sm">
          <div class="card-body p-4 p-xxl-5">
            <figure>
              <img class="img-fluid rounded rounded-circle mb-4 border border-5" loading="lazy" src="image/nawed.jpg" alt="" style="height:100px;">
              <figcaption>
                <div class="bsb-ratings text-warning mb-3" data-bsb-star="5" data-bsb-star-off="0"></div>
                <blockquote class="bsb-blockquote-icon mb-4">I've have been working at Safeplus as a Developer and we've built many platforms together, but this one stands out for its user-friendly interface and exceptional support. The integration with our existing tools has helped how we manage courses and interact with students.</blockquote>
                <h4 class="mb-2">Nawed Arshad</h4>
                <h5 class="fs-6 text-secondary mb-0">Senior Developer</h5>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- End Review -->
    <div class="container container-fluid pt-5" >
        <?php
            include("faq-template.php");
        ?>
    </div>
    <!-- Start footer -->
</section>
    <?php
    
    // include ("./contact_template.php");
    include ("./footer.php")
        ?>