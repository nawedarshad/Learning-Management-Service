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
                <h2>Answer Templates</h2>
            </div>
            <hr>
            <a href="https://drive.google.com/file/d/1UJYefD2zqTN0kzT5w9U1x9G-mV9AqKY_/view?usp=drive_link">Sample Answer of Task 1</a><br>
            <a href="https://docs.google.com/document/d/1jwbyIA4kZXUl1PRgWwABmL5bPlpHg6tY/edit?usp=drive_link&ouid=102259761372481885790&rtpof=true&sd=true">Unit 1</a><br>
            <a href="https://docs.google.com/document/d/1FNHeGv3ipM14_MiFR-W527AV02V9dB80/edit?usp=drive_link&ouid=102259761372481885790&rtpof=true&sd=true">Unit 2</a><br>
            <a href="https://docs.google.com/document/d/188tdISOR-AWQI1WMof3qqSGfpoRnKKav/edit?usp=drive_link&ouid=102259761372481885790&rtpof=true&sd=true">Unit 3</a><br>
            <a href="https://docs.google.com/document/d/1egBYWC7_nMMCmH6uvWkd6gV3W47Eqc4g/edit?usp=drive_link&ouid=102259761372481885790&rtpof=true&sd=true">Unit 4</a><br>
            <a href="https://docs.google.com/document/d/10WcBofx-kE2J-13wDVDUx7oyRtI_jQ3c/edit?usp=drive_link&ouid=102259761372481885790&rtpof=true&sd=true">Unit 5</a><br>
            <a href="https://docs.google.com/document/d/1qfSvqgg2eV3mMUoit3zsnQ_0RkgDXpiJ/edit?usp=drive_link&ouid=102259761372481885790&rtpof=true&sd=true">Unit 6</a><br>
            <a href="https://docs.google.com/document/d/1eZohRnjyvBIe5Tul3dDZoWshVsWNnaqD/edit?usp=drive_link&ouid=102259761372481885790&rtpof=true&sd=true">Unit 7</a><br>
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
