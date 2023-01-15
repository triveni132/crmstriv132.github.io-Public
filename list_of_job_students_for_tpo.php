
<!DOCTYPE html>
<html>
<head>
	<title>List Of job Students</title>
	<?php
include("db.php"); //database code
?>

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
		padding-bottom: 30px;
	}
	td, th {
	border: 1px solid #dddddd;
  	text-align: left;
	padding: 8px;

}
</style>
<body>
	<div class="main">
		<a href="after_login_tpo.php" class="back">Back</a>
<center>
	<h1>List Of Job Students</h1>
</div>
</center><br><br>


<table border="1px;" align="center">
	
	<tr>
		<th>S.No.</th>
		<th>enrollment_no</th>
		<th>fullname</th>
		<th>fname</th>
		<th>aadhar</th>
		<th>contact_no</th>
		<th>email</th>
		<th>dob</th>
		<th>address</th>
		<th>clg_name</th>
		<th>branch</th>
		<th>first</th>
		<th>second</th>
		<th>third</th>
		<th>fourth</th>
		<th>fifth</th>
		<th>sixth</th>
		<th>cgpa</th>
		<th>passout_year</th>
		<th>documents</th>
		<th>resume</th>
	</tr>
	<tr>
		<?php
	$count=1;
	$sel_query = "select * from registration_for_job ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result))
	{
		?>
		<td> <?php echo $count; ?></td>
		<td><?php echo $row["enrollment_no"]; ?></td>
		<td><?php echo $row["fullname"]; ?></td>
		<td><?php echo $row["fname"]; ?></td>
		<td><?php echo $row["aadhar"]; ?></td>
		<td><?php echo $row["contact_no"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["dob"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["clg_name"]; ?></td>
		<td><?php echo $row["branch"]; ?></td>
		<td><?php echo $row["first"]; ?></td>
		<td><?php echo $row["second"]; ?></td>
		<td><?php echo $row["third"]; ?></td>
		<td><?php echo $row["fourth"]; ?></td>
		<td><?php echo $row["fifth"]; ?></td>
		<td><?php echo $row["sixth"]; ?></td>
		<td><?php echo $row["cgpa"]; ?></td>
		<td><?php echo $row["passout_year"]; ?></td>
		<td><?php echo $row["documents"]; ?></td>
		<td><?php echo $row["resume"]; ?></td>
		
	</tr>
<?php $count++; }?>	
</table>

</body>
</html>