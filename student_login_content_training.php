<!DOCTYPE html>
<html>
<head>
	<title>After Login Training Student</title>
</head>
<style>
	
.text{
  font-size: 20px;
  color: white;
}

.field{
  background-color:  #010c29;
   height: 550px; 
   width: 400px;
   padding-top: 10px;
}
.down {
  display: inline-block;
  font-size: 20px; 
  margin-left: 20px;
  margin-right: 60px;
  color: white;
  position: absolute;

}

.branch {
  
  position: fixed;
  font-size: 18px;
  position: absolute;
}

.branch a {
  color: white;
  padding: 5px;
  text-decoration: none;
  display: block;
}

.branch a:hover {background-color: deepskyblue;}

.down:hover .branch {display: block;}

.down:hover 
}
.system_img{
  padding-right: 60px;
}

</style>
<body bgcolor="lightgray">
  <img src="system_com.jpg" align="right" height="500px" width="840px" class="system_img">
   <fieldset class="field">
    <legend></legend>
  <ul>
    <!--<div>
    <li>
<a href="change_password.php" class="text">Change Password</a>
  </li>
  </div><br>-->
<div>
    <li>
<a href="view_training.php" class="text">View Training</a>
  </li>
  </div><br>

  <!--<div>
  	<li>
<a href="history_of_applied_training.php" class="text">History Of Applied Training</a>
  </li>
  </div><br>-->

  <div>
  	<li>
<a href="list_of_company_for_student_training.php" class="text">View Company List</a>
  </li>
  </div><br>
  <div>
  	<li>
<a href="logout.php" class="text">Logout</a>
  </li>
  </div><br>
    
      </ul>
</fieldset>

</body>
</html>