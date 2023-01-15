<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM student_registration WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error("deleted"));
header("Location: manage_job_student_for_admin.php"); 
?>
