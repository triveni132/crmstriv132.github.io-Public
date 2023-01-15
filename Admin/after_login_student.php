<?php
include("auth_student.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>After Login Student</title>
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
    <a href="login_student.php" class="back">Back</a>
    <center>
  <h1>Welcome <?php echo $_SESSION['enrollment_no']; ?>!</h1>
  </div><br>
  </center>
   <?php 
  include("student_login_content.php");
?>

</body>
</html>