
<?php
session_start();
if(!isset($_SESSION["company_name"])){
header("Location: after_login_student_job.php");
exit(); }

?>
