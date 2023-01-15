<?php
include("auth_company.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>After Login Company</title>
</head>
<style>
	
	.company {
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
<div class="company">
    <a href="login_company.php" class="back">Back</a>
  <center>
  <h1>Welcome <?php echo $_SESSION['email']; ?>!</h1>
  </div><br><br>
</center>
<?php 
  include("company_login_content.php");
?>

</body>
</html>