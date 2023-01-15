<?php
include("auth_tpo.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>After login TPO</title>
</head>
<body>
<style>
	
	.tpo {
  background-color: darkblue;
    padding: 10px;
    color: white;
}
.back{
    color: red;
    font-size: 25px;
    padding-bottom: 30px;
  }
</style>
<body>
  <div class="tpo">
    <a href="login_tpo.php" class="back">Back</a>
  <center>
  <h1>Welcome <?php echo $_SESSION['email']; ?>!</h1>
  </div><br><br><br><br>
  </center>
  <?php
  include("tpo_login_content.php");
  ?>
</body>
</html>