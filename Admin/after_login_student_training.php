<?php
include("auth_student_training.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>After Login Training Student </title>
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
    
    <center>
  <h1>Welcome <?php echo $_SESSION['enrollment_num']; ?>!</h1>
  </div><br>
  </center>
   <?php 
  include("student_login_content_training.php");
?>

</body>
</html>