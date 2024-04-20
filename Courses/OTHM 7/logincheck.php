<?
if (!isset($_SESSION["isLogin"])) {
    header("Location: ../../login.php");
    exit();
}
?>