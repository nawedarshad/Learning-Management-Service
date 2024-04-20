<?php

include("../../../header.php");
if (!isset($_SESSION["isLogin"])) {
    header("Location: ../login.php");
    exit();
}
?>

<!-- In Bootstrap 5, utility classes for background and padding have changed slightly -->
<div class="d-flex flex-column container-fluid" style="padding-top:100px; width:90vw;" id="content">
    <div style="width: 70vw;">
        <div style="border: solid 2px darkgreen; border-radius:20px;" class="p-5">
            <div>
                <h2>ASSESSMENT AND VERIFICATION</h2>
            </div>
            <hr>
            
            <p style="font-size: 1.3rem;">All units within this qualification are internally assessed by the centre and externally verified by OTHM. The qualifications are criterion referenced, based on the achievement of all the specified learning outcomes.</p><p style="font-size: 1.3rem;">To achieve a "pass" for a unit, learners must provide evidence to demonstrate that they have fulfilled all the learning outcomes and meet the standards specified by all assessment criteria. Judgement <p style="font-size: 1.3rem;">that the learners have successfully fulfilled the assessment criteria is made by the&nbsp;Assessor.</p><p style="font-size: 1.3rem;">The Assessor should provide an audit trail showing how the judgement of the learners’ overall achievement has been arrived at.</p><p style="font-size: 1.3rem;">&nbsp;</p>
        </div>
        <div class="py-3 d-flex justify-content-center" style="gap: 20px;">
            <a href="4.php"><button class="btn btn-primary">Previous</button></a>
            <a href="6.php"><button class="btn btn-success">Next</button></a>
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
