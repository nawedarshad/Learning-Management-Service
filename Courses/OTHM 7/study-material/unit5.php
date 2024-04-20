<?php

include ("../header.php");
if (!isset($_SESSION["isLogin"])) {
    header("Location: ../../../login.php");
    exit();
}
?>

<!-- In Bootstrap 5, utility classes for background and padding have changed slightly -->
<div class="d-flex flex-row col-12 mt-5 mt-md-0" style="padding-top:100px; width:90vw; height='auto'" id="content" >
    <div style="width: 70vw;">
        <div>
            <h2>Unit-1 Study Material</h2>
        </div>
        <img src="image/introduction.png" alt="" style="width:70vw;">
        <div id="pdfViewer">
            <iframe
                src="http://docs.google.com/gview?url=https://safeplusacademy.com/LMS/Files/UNIT%205%20-%20OTHM%20LEVEL%206%20DIPLOMA%20IN%20OCCUPATIONAL%20HEALTH%20%26%20SAFETY.pdf&embedded=true"
                style="width:70vw; height:500px;" frameborder="0"></iframe>
        </div>

        <div class="py-3 d-flex justify-content-center" style="gap: 20px;">
            <a href="unit4.php"><button class="btn btn-primary">Previous</button></a>
            <a href="unit6.php.php"><button class="btn btn-success">Next</button></a>
        </div>
    </div>
    <div class="d-flex flex-column position-relative col-12 mt-5 mt-sm-0"
     style="width: 100px; top: 10vh; bottom: 0; right: 0; background-color: var(--bs-light);">
        <?php
        include ("sidebar.php");
        ?>

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
    <!-- Your own scripts, if any, come last -->

    </body>

    </html>