
<!DOCTYPE html>
<html>
<head>
<title>Manage Student</title>
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
		<a href="after_login_admin.php" class="back">Back</a>
<center>
	<h1>Manage Student</h1>
</center>
</div><br><br>

<table border="1px;" align="center">
	
	<tr>
		<th>S.No.</th>
		<th>email</th>
		<th>fullname</th>
		<th>fname</th>
		<th>enrollment_no</th>
		<th>aadhar</th>
		<th>contact_no</th>
		<th>dob</th>
		<th>address</th>
		<th>category</th>
		<th>clg_name</th>
		<th>branch</th>
		<th>gender</th>
		<th>what_u_want</th>
		<th>first</th>
		<th>second</th>
		<th>third</th>
		<th>fourth</th>
		<th>fifth</th>
		<th>sixth</th>
		<th>cgpa</th>
		<th>passout_year</th>
		<th>resume</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<tr>
		<?php
	$count=1;
	$sel_query = "select * from student_registration ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result))
	{
		?>
		<td> <?php echo $count; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["fullname"]; ?></td>
		<td><?php echo $row["fname"]; ?></td>
		<td><?php echo $row["enrollment_no"]; ?></td>
		<td><?php echo $row["aadhar"]; ?></td>
		<td><?php echo $row["contact_no"]; ?></td>
		<td><?php echo $row["dob"]; ?></td>
		<td><?php echo $row["address"]; ?></td>
		<td><?php echo $row["category"]; ?></td>
		<td><?php echo $row["clg_name"]; ?></td>
		<td><?php echo $row["branch"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["what_u_want"]; ?></td>
		<td><?php echo $row["first"]; ?></td>
		<td><?php echo $row["second"]; ?></td>
		<td><?php echo $row["third"]; ?></td>
		<td><?php echo $row["fourth"]; ?></td>
		<td><?php echo $row["fifth"]; ?></td>
		<td><?php echo $row["sixth"]; ?></td>
		<td><?php echo $row["cgpa"]; ?></td>
		<td><?php echo $row["passout_year"]; ?></td>
		<td><?php echo $row["resume"]; ?></td>
		<td align="center"><a href="#" id=<?php echo $row["id"]; ?>"><input type="button" name="update" value="Update" onclick="f();"></a></td>
		<td align="center"><a href="delete_new_vacancy.php?id=<?php echo $row["id"]; ?>"><input type="button" name="delete" value="Delete" onclick="f();"></a></td>
	</tr>
<?php $count++; }?>	
</table>

<script type="text/javascript">
            function f() {
                alert('Are you sure to delete ');
            }
</script>
</body>
</html>