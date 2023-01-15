
<?php
require('db.php');
include("auth_student_job.php");

?>
<!DOCTYPE html>
<html>
<head>

<title>Apply job page</title>
</head>
<style>
     .new{
          background-color: darkblue;
          padding: 10px;
          color: white;
     }
     .form{
             margin: 30px;
     }
     input[type="text"]
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
    
    input[type=submit]:hover {
        background-color: blue;
    }
    .back{
    color: red;
    font-size: 25px;
  }
 

</style>

<body>
<div class="new">
     <a href="after_login_student.php" class="back">Back</a>
     <center>
     <h1>Apply Job</h1>
</div><br><br>
</center>

<center>
     <form method="post" action="">
          <fieldset style="background-color:  antiquewhite; height: 900px; width: 600px;">
                <legend></legend>
<table  class="form">
<?php

$id=$_REQUEST['id'];
$query = "SELECT * from new_vacancy where id='$id'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
        <tr>
             <td> Vacancy Id :</td>
             <td><input type="text" name="id"  value="<?php echo $row['id']; ?>"></td>
        </tr>
        <tr>
             <td> Company Name:</td>
             <td><input type="text" name="company_name"  value="<?php echo $row['company_name']; ?>" ></td>
        </tr>
        <tr>
             <td> Job Title :</td>
             <td><input type="text" name="job_title"  value="<?php echo $row['job_title']; ?>"></td>
        </tr>
        <tr>
             <td> Monthly in-hand salary :</td>
             <td><input type="text" name="salary"  value="<?php echo $row['salary']; ?>"></td>
        </tr>
        <tr>
             <td> Job Description :</td>
             <td><input type="text" name="job_description"  value="<?php echo $row['job_description']; ?>"></td>
        </tr>
        <tr>
             <td> Job Location :</td>
             <td><input type="text" name="job_location"  value="<?php echo $row['job_location']; ?>"></td>
        </tr>
        <tr>
             <td> Number Of Opening :</td>
             <td><input type="text" name="no_of_opening"  value="<?php echo $row['no_of_opening']; ?>"></td>
        </tr>
        <tr>
             <td> Apply Date :</td>
             <td><input type="text" name="apply_date"  value="<?php echo $row['apply_date']; ?>"></td>
        </tr>
        <tr>
             <td>Last Date :</td>
             <td><input type="text" name="last_date"  value="<?php echo $row['last_date']; ?>"></td>
        </tr>
                <?php

include("db.php");

if(isset($_POST['submit']))
{
     // variables for input data 
     $company_name = $_POST['company_name'];
     $job_title = $_POST['job_title'];
     $salary = $_POST['salary'];
     $job_description = $_POST['job_description'];
     $job_location = $_POST['job_location'];
     $no_of_opening = $_POST['no_of_opening'];
     $apply_date = $_POST['apply_date'];
     $last_date = $_POST['last_date'];
     $resume = $_POST['resume'];


     // sql query for inserting data into database
     $result = mysqli_query($con, "INSERT INTO  history_applied_job(company_name,job_title,salary,job_description,job_location,no_of_opening,apply_date,last_date,resume) VALUES('$company_name','$job_title','$salary','$job_description','$job_location','$no_of_opening','$apply_date','$last_date','$resume')");

      if($result){
            echo "<div class='form'><h3>You are successfully apply for this job..</h3><br/>Click here to <a href='after_login_student_job.php'>Your Dashboard</a></div>";
        }
    }else{
?>


         <tr>
            <td>Add Your Resume :</td>
            <td><input type="file" name="resume" placeholder="Resume" ></td>
        </tr>
</table>
        <input type="submit" name="submit" value="Apply Job"></tr>

</form>
</center> 
 <script type="text/javascript">
            function f() {
                alert('You are successfully apply for this job..');
            }
</script>

</div>
</div>

     <?php } ?>
       
</body>
</html>
