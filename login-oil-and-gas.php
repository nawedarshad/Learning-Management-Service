<?php
include("header-login.php");
?>
    <section class="vh-100" style="background-color: #E3FDFD;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="image/login.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="loginStudent-oil-and-gas.php">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Oil and Gas Operational Safety</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>
                                            <!-- Logo and heading omitted for brevity -->

                                            <div class="form-outline mb-4">
                                                <input type="email" id="form2Example17" name="student_email"
                                                    class="form-control form-control-lg" required />
                                                <label class="form-label" for="form2Example17">Email address</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" id="form2Example27" name="student_pass"
                                                    class="form-control form-control-lg" required />
                                                <label class="form-label" for="form2Example27">Password</label>
                                            </div>

                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                   
                                    </form>
                                    <a href="#!" class="small text-muted">Privacy policy</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>