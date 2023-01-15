
<!DOCTYPE html>
<html>
<head>
	<title>Manage Applied Jobs</title>
</head>
<style>
	.main{
		background-color: darkblue;
		padding: 10px;
		color: white;
	}
	.back{
		color: red;
		font-size: 25px;
	}
</style>
<body>
	<div class="main">
		<a href="after_login_admin.php" class="back">Back</a>
<center>
	<h1 class="main">Manage Applied Jobs</h1>
</center>
</div><br><br>
<?php
include("db.php"); //database code
include("auth_student_job.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Vacancy</title>
</head>
<style>
	.main{
		background-color: darkblue;
		padding: 15px;
		color: white;
	}
	.back{
          color: red;
          font-size: 25px;
     }
     td, th {

  	border: 1px solid #dddddd;
  	text-align: left;
	padding: 8px;

}
</style>
<body>
	

<table border="1px;" align="center">
	
	<tr>
		<th>S.No.</th>
		<th>company_name</th>
		<th>job_title</th>
		<th>salary</th>
		<th>job_description</th>
		<th>job_location</th>
		<th>no_of_opening</th>
		<th>apply_date</th>
		<th>last_date</th>
		<th>Resume</th>
		<th>Delete</th>
	</tr>
	<?php
	$count=1;
	$sel_query = "select * from  history_applied_job ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result))
	{ ?>
	<tr>
	
		<td> <?php echo $count; ?></td>
		<td><?php echo $row["company_name"]; ?></td>
		<td><?php echo $row["job_title"]; ?></td>
		<td><?php echo $row["salary"]; ?></td>
		<td><?php echo $row["job_description"]; ?></td>
		<td><?php echo $row["job_location"]; ?></td>
		<td><?php echo $row["no_of_opening"]; ?></td>
		<td><?php echo $row["apply_date"]; ?></td>
		<td><?php echo $row["last_date"]; ?></td>
		<td><?php echo $row["resume"]; ?></td>
		<td align="center"><a href="delete_applied_job.php?id=<?php echo $row["id"]; ?>"><input type="button" name="delete" value="Delete" onclick="f();"></a></td>
	
	</tr>
<?php $count++; }?>	
</table>


</body>
</html></body>
</html>