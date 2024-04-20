<?php
include("../header.php");
session_start();
if (!isset($_SESSION["isLogin3"])) {
    header("Location: ../../../login-medic-first-aid.php");
    exit();
}
?>

<!-- In Bootstrap 5, utility classes for background and padding have changed slightly -->
<div class="d-flex flex-column container-fluid" style="padding-top:100px; width:90vw;" id="content" >
<div>
    <h2>Legal Consideration</h2>
</div>
<div style="width: 70vw;">
    <!--<img src="image/introduction.png" alt="" style="width:70vw;">-->
    <div id="pdfViewer">
        <video id="myVideo" controls >
  <source src="Video/VTS_03_1 legal consideration_1.mp4" type="video/mp4">
</video>

</div>
    <div class="py-3 d-flex justify-content-center" style="gap: 20px;">
        <a href="introduction2.php"><button class="btn btn-primary">Previous</button></a> 
        <a href="introduction4.php"><button class="btn btn-success">Next</button></a>
    </div>
</div>
<div class="d-flex flex-column position-fixed" style="width: 20vw; top: 10vh; bottom: 0; right: 0; background-color: var(--bs-light);">

<?php
    include("sidebar.php");
?>

</div>
<!-- Ensure jQuery is loaded first -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Then load Popper.js if you're using Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.11.9/dist/umd/popper.min.js"></script>


<!-- Then Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Your own scripts, if any, come last -->

</body>

</html>
