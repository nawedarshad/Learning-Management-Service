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
                <h2>QUALIFICATION STRUCTURE</h2>
            </div>
            <hr>
            
            <p style="font-size: 1.3rem;"><strong>OTHM Level 6 Diploma in Occupational Health and Safety</strong></p><p style="font-size: 1.3rem;">The OTHM Level 6 Diploma in Occupational Health and Safety consists of 7 mandatory units for a combined total of 60 credits, 600 hours Total Qualification Time (TQT) and 220 Guided Learning Hours (GLH) for the completed qualification.</p><figure class="table"><table><tbody><tr><td><span style="background-color:hsl(0, 0%, 100%);color:hsl(0, 0%, 0%);"><strong>Unit Ref. No.</strong></span></td><td><span style="background-color:hsl(0, 0%, 100%);color:hsl(0, 0%, 0%);"><strong>Unit title</strong></span></td><td><span style="background-color:hsl(0, 0%, 100%);color:hsl(0, 0%, 0%);"><strong>Credit</strong></span></td><td><span style="background-color:hsl(0, 0%, 100%);color:hsl(0, 0%, 0%);"><strong>GLH</strong></span></td><td><span style="background-color:hsl(0, 0%, 100%);color:hsl(0, 0%, 0%);"><strong>TQT</strong></span></td></tr><tr><td>H/617/7539</td><td>Health and Safety Management Principles and Policy</td><td>8</td><td>30</td><td>80</td></tr><tr><td>Y/617/8526</td><td>Health and Safety Management Practice</td><td>10</td><td>40</td><td>100</td></tr><tr><td>Y/617/7540</td><td>Risk and Incident Management</td><td>8</td><td>30</td><td>80</td></tr><tr><td>Y/617/8543</td><td>Promoting a Positive Health and Safety Culture</td><td>6</td><td>20</td><td>60</td></tr><tr><td>R/617/9092</td><td>Maintaining a Safe Workplace Environment</td><td>12</td><td>40</td><td>120</td></tr><tr><td>H/617/7542</td><td>Health and Safety Law, Regulation and Influence</td><td>8</td><td>35</td><td>100</td></tr><tr><td>K/617/7543</td><td>Development of the Health and Safety Practitioner</td><td>8</td><td>25</td><td>80</td></tr><tr><td>&nbsp;</td><td><span class="text-big"><strong>Total</strong></span></td><td><strong>60</strong></td><td><strong>220</strong></td><td><strong>600</strong></td></tr></tbody></table></figure><p style="font-size: 1.3rem;"><strong>TQT </strong>- Total Qualification Time</p><p style="font-size: 1.3rem;"><strong>GLH</strong> - Guided Learning Hours</p><p style="font-size: 1.3rem;"><strong>Credit value</strong> is defined as being the number of credits that may be awarded to a Learner for the successful achievement of the learning outcomes of a unit. One credit is equal to 10 hours of TQT.</p></dd></p>
        </div>
        <div class="py-3 d-flex justify-content-center" style="gap: 20px;">
            <a href="2.php"><button class="btn btn-primary">Previous</button></a>
            <a href="4.php"><button class="btn btn-success">Next</button></a>
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
