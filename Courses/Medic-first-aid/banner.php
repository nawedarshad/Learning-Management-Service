<?php

include("../../header.php");

?>

<!-- In Bootstrap 5, utility classes for background and padding have changed slightly -->
<div class="container-fluid d-flex" style="padding-top:75px;" id="content" >
<div class=" d-flex flex-column justify-content-center align-items-center" style="width:80vw;">
<img src="image/othm.jpg" class="img-fluid" alt="..." style="width: 75vw">
<div class="py-3" style="width: 75vw;">
    <h1>OTHM COURSE</h1>
    <h5>Course Description:</h5>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, atque doloremque ab architecto, dolorum dolore, suscipit totam ipsam voluptatum at fuga rerum labore quasi inventore? Molestiae libero deleniti tempora dolor? Maiores in vitae, quae impedit tempore veritatis ex cupiditate illo ipsum quia! Obcaecati iste assumenda sapiente corrupti earum! Voluptatum nobis architecto odio accusantium sit ea quod dicta excepturi quasi natus maxime cumque quia blanditiis a itaque aperiam quos explicabo molestiae vel quae aliquid, repudiandae placeat! Iusto consectetur ea aperiam laboriosam iure explicabo beatae quasi inventore eligendi. Inventore incidunt, numquam laboriosam ea voluptatem tempora, corrupti eaque non nostrum deleniti libero corporis!</p>
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
