<?php
require('db.php');
include("auth_vacancy.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_vacancy where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<title>Apply Jobs</title>
<style>
     .main{
          background-color: darkblue;
          padding: 15px;
          color: white;
     }
     .apply{
           background-color: darkblue;
          padding: 10px;
          color: white;
     }
     input[type="text"], input[type="date"]
     {
           width: 100%;
  padding: 15px;
  margin: 10px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
     }
     input[type=submit] {
        background-color: green;
        color: white;
        padding: 8px 20px;
        border: none;
        cursor: pointer;
        margin-right: 60px;
    }
     .back{
          color: red;
          font-size: 25px;
     }
</style>
</head>

<body>

<div class="apply">
 <a href="view_vacancy.php" class="back">Back</a>
<center><h1>Apply Job </h1></div><br><br></center>

<center><div class="formtab">
<fieldset style="background-color:  antiquewhite; height: 800px; width: 600px;">
<legend></legend>
	
<form class="form" action="" method="POST" >
<table  class="table">
     <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
          <tr>
             <td> Company Name :
             <td><input type="text" name="company_name" value="<?php echo $row['company_name'];?>"></td>
        </tr>

		<tr>
             <td> Job Title :
             <td><input type="text" name="job_title" value="<?php echo $row['job_title'];?>"></td>
        </tr>
        <tr>
             <td> Monthly in-hand salary :
             <td><input type="text" name="salary" value="<?php echo $row['salary'];?>"></td>
        </tr>
        <tr>
             <td> Job Description :
             <td><input type="text" name="job_description" value="<?php echo $row['job_description'];?>"></td>
        </tr>
        <tr>
             <td> Job Location :
             <td><input type="text" name="job_location" value="<?php echo $row['job_location'];?>"></td>
        </tr>
        <tr>
             <td> Number Of Opening :
             <td><input type="text" name="no_of_opening" value="<?php echo $row['no_of_opening'];?>"></td>
        </tr>
        <tr>
             <td> Apply Date :
             <td><input type="date" name="apply_date" value="<?php echo $row['apply_date'];?>"></td>
        </tr>
        <tr>
             <td>Last Date :
             <td><input type="date" name="last_date" value="<?php echo $row['last_date'];?>"></td>
        </tr>
         <tr>
            <td>Add Your Resume :</td>
            <td><input type="file" name="resume" placeholder="Resume" ></td>
        </tr>
        <tr>
   			<td> <input type="submit" name="submit" value="Apply" onclick="f();"></td>
        </tr>
        	
</table>
</form>
</fieldset>
</center>
</div>

<script type="text/javascript">
function f() 
     {
          alert('You are successfully apply for this job..');
     }
</script>
</body>
</html>