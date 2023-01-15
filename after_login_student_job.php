<?php
include("auth_student_job.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>After Login Student For Job</title>
</head>
<style>
	
	.main{
    background-color: darkblue;
    padding: 10px;
    color: white;
  }
  .back{
    color: red;
    font-size: 25px;
  }
</style>
<body bgcolor="lightgray">

  <div class="main">
    <a href="login_student_for_job.php" class="back">Back</a>
    <center>
  <h1>Welcome <?php echo $_SESSION['enrollment_no']; ?>!</h1>
  </div><br>
  </center>
   <?php 
  include("student_login_content_job.php");
?>

</body>
</html>