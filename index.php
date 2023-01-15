<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>    
<style>
.down {
  display: inline-block;
  font-size: 20px; 
  margin-left: 20px;
  margin-right: 60px;
}

.content {
  display: none;
  position: fixed;
  font-size: 20px;
}

.content a {
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
}

.content a:hover {background-color: lightgray;}

.down:hover .content {display: block;}

.down:hover 
}

.head {
  border: 0;
  line-height: 1;
    font-size: 20px;
}
.para{
    font-size: 20px;
    margin-left: 70px;
}
.find{
    font-size: 20px;
    color: red; 
    margin-left: 70px;
}
.crms{
    margin-left: 80px;
}
.text{
    margin-left: 70px;
}
.imgfile{
    margin-top: 60px;
}
</style>
</head>

<body background="lightgray.jpg ">

<?php
include("header_home.php");
?>
<br><br>
<img src="hiring.jpg" align="right" width="600px" height="400px" class="imgfile">
 
<h1 style="color:darkblue; font-size: 60px;" class="text"> CAMPUS<br>RECRUITMENT<br> MANAGEMENT<br>SYSTEM</h1>

 <p class="para" align="justify" style="margin-right: 50%;">Through this website ,students will not need 
    to wander anywhere for job placement and  by registering in this website , 
    students can  apply  for  jobs in the posted vacancies , through 
     this  website  students  can  apply for industrial training . 
     In the  website  we  are  providing  the  information  of  
     those  companies by  which  campus placement is provided.</p>
    

<?php
include("home_down.php");
    ?>

<br>
<?php
include("footer.php"); 
?>

</body>
</html>