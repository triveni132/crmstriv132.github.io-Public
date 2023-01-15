<!DOCTYPE html>
<html> 
<head>
    <title>Home Page</title>
</head>    
<style>
  .linecolor{
    background-color: #010c29;
    padding: 20px ;
}
.down {
  display: inline-block;
  font-size: 20px; 
  margin-left: 10px;
  margin-right: 20px;
  color: white;
}
.camp{
  display: inline-block;
  font-size: 25px; 
  margin-left: 20px;
  margin-right: 60px;
  color: white;
}

.job{
 display: inline-block;
  font-size: 20px; 
  color: white; 
}
.content {
  display: none;
  position: fixed;
  font-size: 20px;
  background-color: skyblue;
}

.content a {
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
}

.content a:hover {background-color: deepskyblue;}

.down:hover .content {display: block;}

.down:hover 
}
.para{
    font-size: 20px;
    margin-left: 70px;
}

.crms{
    margin-left: 80px;
}
.text{
    margin-left: 70px;
}
.upper{
  color: white;
}
.up{
  margin-right: 10px;
  background-color: black;
    padding: 10px ;
}
.text_crms{
  color: white;
}
.upper{
text-decoration: none;
}
.down a:hover{
  background-color: deepskyblue;
  color: white;
}
.admin{
  display: inline-block;
  font-size: 20px; 
  margin-left: 80px;
  margin-right: 10px;
  font-family: serif;
}
.ad{
  color: orange;
  text-decoration: none;
}
</style>
</head>
<body>
  <img src="crms_logo.jpg" height="80px" width="1340px">
<div class="linecolor">
  <div class="camp">
  <a href="index.php" class="upper"> <b style="color: red; font-size: 40px;"  class="crms">CRMS</b></a>
  </div>
<div class="down">
 <b><a href="about_us.php" class="upper">About us </a> </b>
  </div>


<div class="down">
  <b><a href="#" class="upper">TPO</a> </b>
  <div class="content">
    <a href="registration_tpo.php">Registration</a>
    <a href="login_tpo.php">Login</a>
</div>
</div>

<div class="down">
  <b><a href="#" class="upper">Company</a> </b>
  <div class="content">
    <a href="registration_company.php">Registration</a>
    <a href="login_company.php">Login</a>
</div>
</div>
<div class="down">
  <b><a href="#" class="upper">Student(For Job)</a> </b>
  <div class="content">
    <a href="registration_student_for_job.php">Registration for Job</a>
    <a href="login_student_for_job.php">Login for Job</a>
</div>
</div>
<div class="down">
  <b><a href="#" class="upper">Student(For Training)</a> </b>
  <div class="content">
    <a href="registration_student_for_training.php">Registration for Training</a>
    <a href="login_student_for_training.php">Login for Training</a>
</div>
</div>

<!--<div class="down">
  <b><a href="#" class="upper">Student</a></b>
  <div class="content">
      <a href="#" class="job">Job</a>
        <div class="sub_con">
          <ul class="sub_menu">
            <li><a href="registration_student_for_job.php">Registration for Job </a></li>
            <li><a href="login_student_for_job.php">Login for Job</a></li>
          </ul>
        </div>
    <a href="#" class="job">Training</a>
      <div class="sub_con">
        <ul class="sub_menu_sec">
           <li> <a href="registration_student_for_training.php">Registration for Training</a></li>
           <li> <a href="login_student_for_training.php">Login for Training</a></li>
         </ul>
      </div>
</div>
</div>-->
<div class="down">
  <b><a href="contact_us.php" class="upper">Help </a></b>
</div>

<div class="admin">
  <b><a href="Admin/admin_login.php" class="ad">Admin</a></b>
</div><br><br>
</div>
</body>
</html>