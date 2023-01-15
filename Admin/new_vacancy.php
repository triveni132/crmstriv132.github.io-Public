<!DOCTYPE html>
<html>
<head>

	<title>New Vacancy Page</title>
</head>
<style>
	.new{
		background-color: darkblue;
		padding: 10px;
		color: white;
	}
	.table{
		   margin: 30px;
	}
	.form{
		margin-bottom: 30px;
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
    
    input[type=submit]:hover {
        background-color: blue;
    }
    .formtab{
     text-align: right;
    }
    .back{
          color: red;
          font-size: 25px;
     }
</style>
<body bgcolor="lightgray">
    
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

     // sql query for inserting data into database
     $result = mysqli_query($con, "INSERT INTO new_vacancy(company_name,job_title,salary,job_description,job_location,no_of_opening,apply_date,last_date) VALUES('$company_name','$job_title','$salary','$job_description','$job_location','$no_of_opening','$apply_date','$last_date')");

      if($result){
            echo "<div class='form'><h3>New Vacancy added successfully</h3><br/>Click here to <a href='after_login_company.php'>Your Dashboard</a></div>";
        }
    }else{
?>


<div class="new">
     <a href="after_login_company.php" class="back">Back</a>
	<center>
	<h1>New Vacancy</h1>
</div><br><br>
</center>
<center><div class="formtab">
     <fieldset style="background-color:  antiquewhite; height: 800px; width: 600px;">
                <legend></legend>
	<form class="form" action="" method="POST" >

	
<table  class="table">

          <tr>
             <td> Company Name :
             <td><input type="text" name="company_name" placeholder="Enter Company Name"></td>
        </tr>

		<tr>
             <td> Job Title :
             <td><input type="text" name="job_title" placeholder="Job Title"></td>
        </tr>
        <tr>
             <td> Monthly in-hand salary :
             <td><input type="text" name="salary" placeholder="Monthly in-hand salary"></td>
        </tr>
        <tr>
             <td> Job Description :
             <td><input type="text" name="job_description" placeholder="Job Description"></td>
        </tr>
        <tr>
             <td> Job Location :
             <td><input type="text" name="job_location" placeholder="Job Location"></td>
        </tr>
        <tr>
             <td> Number Of Opening :
             <td><input type="text" name="no_of_opening" placeholder="Number Of Opening"></td>
        </tr>
        <tr>
             <td> Apply Date :
             <td><input type="date" name="apply_date" placeholder="Apply Date"></td>
        </tr>
        <tr>
             <td>Last Date :
             <td><input type="date" name="last_date" placeholder="Last Date"></td>
        </tr>
        <tr>
   			<td> <input type="submit" name="submit" value="Add Vacancy" onclick="f();"></td>
        </tr>
</table>
</form>
</fieldset>
</center>
</div>


<script type="text/javascript">
            function f() {
                alert('New vacancy added successfully....');
            }
</script>
    

     <?php } ?>
            
</body>
</html>