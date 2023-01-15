
<?php
session_start();
if(!isset($_SESSION["enrollment_no"])){
header("Location: login_student_for_job.php");
exit(); }

?>
