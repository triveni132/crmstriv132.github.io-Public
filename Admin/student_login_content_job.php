<!DOCTYPE html>
<html>
<head>
	<title>After Login Student for job</title>
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
   <!-- <div>
    <li>
<a href="change_password.php" class="text">Change Password</a>
  </li>
  </div><br>-->

  <div>
  	<li>
<a href="view_vacancy.php" class="text">View Vacancy</a>
  </li>
  </div><br>
  
  <div>
  	<li>
<a href="history_of_applied_jobs.php" class="text">History Of Applied Jobs</a>
  </li>
  </div><br>

  <div class="down">
  	<li>
<a href="#" class="text">View Previous Selected Students List</a>
  </li>
  <div class="branch">
    <ul>
  <li> <a href="selected_student_cse.php" >Computer Science</a></li>
   <li><a href="selected_student_elect.php" >Electrical</a></li>
   <li><a href="selected_student_mech.php" >Mechenical</a></li>
  <li> <a href="selected_student_civil.php" >Civil</a></li>
   <li><a href="heartly_cong.php">Heartly Congratulations</a></li>
 </ul>
  </div>
</div><br>
<br><br><br><br><br><br><br><br><br>
  <div>
  	<li>
<a href="list_of_company_for_student.php" class="text">View Company List</a>
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