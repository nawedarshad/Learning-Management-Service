<!-- Start footer -->
<div class="container px-4 border-top" id="featured-3">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Users</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="courses.php" class="nav-link p-0 text-body-secondary">Courses</a></li>
          <li class="nav-item mb-2"><a href="register.php" class="nav-link p-0 text-body-secondary">Blogs</a></li>
          <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Sign Up</a></li> -->
          <li class="nav-item mb-2"><a href="feedback.php" class="nav-link p-0 text-body-secondary">Feedback</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Contact</h5>
        <ul class="nav flex-column">
          <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li> -->
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-body-secondary">Contact</a></li>
          <li class="nav-item mb-2"><a href="faq.php" class="nav-link p-0 text-body-secondary">FAQs</a></li>
          <li class="nav-item mb-2"><a href="team.php" class="nav-link p-0 text-body-secondary">Our Team</a></li>
          <li class="nav-item mb-2"><a href="pr-po.php" class="nav-link p-0 text-body-secondary">Privacy Policy</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Admin</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-body-secondary">About</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary" data-bs-toggle="modal"
              data-bs-target="#adminModal">Admin Login</a></li>
          <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-body-secondary">Join with Us</a></li>
          <li class="nav-item mb-2"><a href="bug.php" class="nav-link p-0 text-body-secondary">Report a bug</a></li>
          <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Become a Teacher</a></li> -->
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p>Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="subscriber" class="visually-hidden">Email address</label>
            <input id="subscriber" type="text" class="form-control" placeholder="Email address">
            <button class="btn btn-success" type="button" onclick="sub(event)">Subscribe</button>
          </div>
          <div id="subscriptionMessage"></div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top ">
      <p>© 2024 Safe Plus Academy. All rights reserved.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-body-emphasis" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
              viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
            </svg></a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram"
              viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
            </svg>
          </a></li>
        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16"
              height="16" fill="black" class="bi bi-whatsapp" viewBox="0 0 16 16">
              <path
                d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
            </svg></a></li>
      </ul>
    </div>
  </footer>
</div>
</div>
</div>


<!-- Start Sign-Up Modal -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sign-Up Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Start Student Registration -->
        <form onsubmit="student_registration(event)">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1_2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1_2">
          </div>
          <button type="submit" class="btn btn-success">Sign Up</button>
          <span id="signup_success"></span>
        </form>

      </div>
      <div class="modal-footer text-start">
        <p>Already have an Account? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2">Login here</a>
        </p>
      </div>
    </div>
  </div>
</div>



<!-- End Student Registration -->

<!-- Start Login Modal -->

<!-- Button trigger modal -->


<!-- Login Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Start Student Login -->
        <form id="loginProcess" onsubmit="student_login(event)">
          <div class="mb-3">

            <label for="exampleInputEmail2" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2">
          </div>
          <button type="submit" class="btn btn-success">Login</button>
          <span id="loginSuccess"></span>
        </form>
      </div>
      <div class="modal-footer text-start">
        <p>Does'nt have an Account? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1">Sign-Up
            here</a></p>
      </div>
      <!-- End Student Login -->
    </div>
  </div>
</div>
<!-- End Login Modal -->



<!-- Admin Login Modal -->
<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <!-- Start Admin Login -->
        <form id="loginProcessAdmin" onsubmit="admin_login(event)">
          <div class="mb-3">

            <label for="exampleInputEmail2" class="form-label">Email address</label>
            <input type="email" class="form-control" id="adminInputEmail" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Password</label>
            <input type="password" class="form-control" id="adminInputPassword">
          </div>
          <button type="submit" class="btn btn-success">Login</button>
          <span id="loginSuccessAdmin"></span>
        </form>
      </div>
      <!-- End Admin Login -->
    </div>
  </div>
</div>
<!-- End Admin Login Modal -->



<script>


  function student_registration(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    var student_email = $("#exampleInputEmail1").val();
    var student_pass = $("#exampleInputPassword1").val();
    var student_conf_password = $("#exampleInputPassword1_2").val();

    // Email validation regex pattern
    var emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\\.,;:\s@"]+\.)+[^<>()[\]\\.,;:\s@"]{2,})$/i;
    if (!emailPattern.test(student_email)) {
      alert("Please enter a valid email address.");
      return; // Stop the function if the email is not valid
    }

    if (student_pass != student_conf_password) {
      alert("Both Passwords Didn't Match");
    } else {
      $.ajax({
        url: "Student/addStudent.php",
        method: "POST",
        dataType: "json",
        data: {
          student_signup: "signup",
          student_email: student_email,
          student_pass: student_pass
        },
        success: function (response) {
          if (response == "OK") {
            console.log("Signup Successful");
            $("#signup_success").html("<span>Signup Successful</span>");
            clearRegField();
          } else if (response == "Failed") {
            console.log("Signup Failed");
            $("#signup_success").html("<span>Unable to Register</span><br>");
          } else if (response == "Email Exists") {
            $("#signup_success").html("<span>Email already exists!</span><br>");
          }
        }
      });
    }
  }



  function sub(event) {
    event.preventDefault(); // Prevent form submission

    var email = $("#subscriber").val();
    var emailPattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\\.,;:\s@"]+\.)+[^<>()[\]\\.,;:\s@"]{2,})$/i;

    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      return;
    }

    $.ajax({
      url: "subscriber.php",
      method: "POST",
      dataType: "json",
      data: { email: email },
      success: function (response) {
        console.log(response)
        if (response === "OK") {
          console.log("Subscribed");
          $("#subscriptionMessage").html("<span>Signup Successful</span>");
          $("#subscriber").val(''); // Clear the email input field
        } else if (response === "Failed") {
          console.log("Signup Failed");
          $("#subscriptionMessage").html("<span>Unable to Register</span>");
        } else if (response === "Email Exists") {
          $("#subscriptionMessage").html("<span>Email already exists!</span><br>");
        }
      },
      error: function () {
        $("#subscriptionMessage").html("<span>There was an error processing your request.</span>");
      }
    });
  }






  function clearRegField() {
    $("#exampleInputEmail1").val("");
    $("#exampleInputPassword1").val("");
    $("#exampleInputPassword1_2").val("");
  }

  function student_login(event) {
    event.preventDefault(); // Prevent the default form submission

    var email = $("#exampleInputEmail2").val();
    var password = $("#exampleInputPassword2").val();

    $.ajax({
      url: "loginStudent.php",
      method: "POST",
      dataType: "json",
      data: {
        student_email: email,
        student_pass: password
      },
      success: function (response) {
        if (response == "Success") {
          console.log("Login Successful");
          window.location.href = "index.php"; // Redirect to dashboard or relevant page
        } else {
          console.log("Login Failed");
          $("#login_error").html("<span>Invalid credentials. Please try again.</span><br>");
        }
      }
    });
  }

  function admin_login(event) {
    event.preventDefault(); // Prevent the default form submission

    var email = $("#adminInputEmail").val();
    var password = $("#adminInputPassword").val();

    $.ajax({
      url: "Admin/adminLogin.php",
      method: "POST",
      dataType: "json",
      data: {
        admin_email: email,
        admin_pass: password
      },
      success: function (response) {
        if (response == "Success") {
          console.log("Login Successful");
          window.location.href = "Admin/index.php"; // Redirect to dashboard or relevant page
        } else {
          console.log("Login Failed");
          $("#loginSuccessAdmin").html("<span>Invalid credentials. Please try again.</span><br>");
        }
      }
    });
  }




</script>

<!-- Ensure jQuery is loaded first -->
<script src="jquery.js"></script>
<!-- jquery -->

<!-- Then load Popper.js if you're using Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.11.9/dist/umd/popper.min.js"></script>

<!-- Then Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Your own scripts, if any, come last -->

</body>

</html>