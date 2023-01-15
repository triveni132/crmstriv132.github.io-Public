<!DOCTYPE html>
<html>
<head>

	<title>New Training Page</title>
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
     $company_name = $_POST['company_name'];
     $training_title = $_POST['training_title'];
     $training_description = $_POST['training_description'];
     $fees = $_POST['fees'];
     $training_location = $_POST['training_location'];
     $start_date = $_POST['start_date'];
     $last_date = $_POST['last_date'];

     $result = mysqli_query($con, "INSERT INTO new_training(company_name,training_title,training_description,fees,training_location,start_date,last_date) VALUES('$company_name','$training_title','$training_description','$fees','$training_location','$start_date','$last_date')");

      if($result){
            echo "<div class='form'><h3>New Training added successfully</h3><br/>Click here to <a href='after_login_company.php'>Your Dashboard</a></div>";
        }
    }else{
?>

<div class="new">
     <a href="after_login_company.php" class="back">Back</a>
	<center>
	<h1>New Training</h1>
</div><br><br>
</center>
<center>
<fieldset style="background-color:  antiquewhite; height: 600px; width: 600px;">
                <legend></legend>
	<form class="form" action="" method="POST">

	
<table  class="table">
          <tr>
             <td> Company Name :
             <td><input type="text" name="company_name" placeholder="Enter Company Name"></td>
        </tr>
		<tr>
             <td> Training Title :
             <td><input type="text" name="training_title" placeholder="Training Title"></td>
        </tr>
        <tr>
             <td> Training Description :
             <td><input type="text" name="training_description" placeholder="Training Description"></td>
        </tr>
        <tr>
             <td> Fees :
             <td><input type="text" name="fees" placeholder=" Enter Fees"></td>
        </tr>
        
        <tr>
             <td> Training Location :
             <td><input type="text" name="training_location" placeholder="Training Location"></td>
        </tr>
        <tr>
             <td> Start Date :
             <td><input type="date" name="start_date" placeholder="Start Date"></td>
        </tr>
        <tr>
             <td>Last Date :
             <td><input type="date" name="last_date" placeholder="Last Date"></td>
        </tr>
        <tr>
   			<td> <input type="submit" name="submit" value="Add Training" onclick="f();"></td>
        </tr>
</table>
</center>
</form>
</fieldset>

<script type="text/javascript">
            function f() {
                alert('New Training added successfully....');
            }
</script>
    
<?php } ?>

</body>
</html>