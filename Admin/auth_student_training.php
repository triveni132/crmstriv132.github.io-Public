
<?php
session_start();
if(!isset($_SESSION["enrollment_num"])){
header("Location: login_student_for_training.php");
exit(); }

?>
