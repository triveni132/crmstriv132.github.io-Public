
<?php
session_start();
if(!isset($_SESSION["login_id"])){
header("Location: admin_login.php");
exit(); }

?>
