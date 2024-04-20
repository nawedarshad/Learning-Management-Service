<?php
session_start();
if (!isset($_SESSION["isAdminLogin"])) {
    header("Location: ../login.php");
    exit();
}
include("sidebar.php");

?>
    
      <?php
      include ("dashboard.php");
      include ("footer.php");
      ?>
   

