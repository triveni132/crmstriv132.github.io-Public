<?php
include("auth_admin.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>After Login Admin</title>
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
  .admin{
    background-color: orange;
    padding: 10px;
    color: white;
  }
</style>
<body bgcolor="lightgray">
<div class="admin">
  <center>
 <marquee class="mar"> <h1>ADMINISTRATIVE AREA</h1></marquee>
</center>
</div>
  <div class="main">
    <a href="admin_login.php" class="back">Back</a>
    <center>
  <h1>Welcome <?php echo $_SESSION['login_id']; ?>!</h1>
  </div><br>
  </center>
   <?php 
  include("admin_login_content.php");
?>

</body>
</html>