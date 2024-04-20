<?php

include("../header.php");
if (!isset($_SESSION["isLogin"])) {
    header("Location: ../../../login.php");
    exit();
}
?>

<!-- In Bootstrap 5, utility classes for background and padding have changed slightly -->
<div class="d-flex flex-column container-fluid" style="padding-top:100px; width:90vw;" id="content">
    <div style="width: 70vw;">
        <div style="border: solid 2px darkgreen; border-radius:20px;" class="p-5">
            <div>
                <h2>QUALITY, STANDARDS AND RECOGNITIONS</h2>
            </div>
            <hr>
            
            <p style="font-size: 1.3rem;">OTHM Qualifications are approved and regulated by Ofqual (Office of Qualifications and Examinations Regulation). Visit register of Regulated Qualifications.</p><p style="font-size: 1.3rem;">IOSH has approved for accreditation the OTHM Level 6 Diploma in Occupational Health and Safety. Students successfully completing this qualification, will be eligible to apply for Graduate level of membership Grad IOSH.</p><p style="font-size: 1.3rem;">OTHM has progression arrangement with several UK universities that acknowledges the ability of learners after studying Level 3-7 qualifications to be considered for advanced entry into corresponding degree year/top-up and Master's/top-up programmes.</p>
            </p>
        </div>
        <div class="py-3 d-flex justify-content-center" style="gap: 20px;">
            <a href="1.php"><button class="btn btn-primary">Previous</button></a>
            <a href="3.php"><button class="btn btn-success">Next</button></a>
        </div>
    </div>
    <div class="d-flex flex-column position-fixed"
        style="width: 20vw; top: 10vh; bottom: 0; right: 0; background-color: var(--bs-light);">

        <!-- Start Sidebar -->


        <?php
        include ("sidebar.php");
        ?>
        <!-- End Sidebar -->

    </div>
    <!-- Ensure jQuery is loaded first -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Then load Popper.js if you're using Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.11.9/dist/umd/popper.min.js"></script>


    <!-- Then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="number-two.js"></script>
    <!-- Your own scripts, if any, come last -->

    </body>

    </html>
