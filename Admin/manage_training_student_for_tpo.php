

<!DOCTYPE html>
<html>
<head>
	<title>Manage Training Students</title>
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
	<h1>Manage Training Students</h1>
</div>
</center><br><br>


<table border="1px;" align="center">
	
	<tr>
		<th>S.No.</th>
		<th>enrollment_num</th>
		<th>fullname</th>
		<th>fname</th>
		<th>clg_name</th>
		<th>branch</th>
		<th>first</th>
		<th>second</th>
		<th>third</th>
		<th>Delete</th>
		</tr>
	<tr>
		<?php
	$count=1;
	$sel_query = "select * from registration_for_training ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result))
	{
		?>
		<td> <?php echo $count; ?></td>
		<td><?php echo $row["enrollment_num"]; ?></td>
		<td><?php echo $row["fullname"]; ?></td>
		<td><?php echo $row["fname"]; ?></td>
		<td><?php echo $row["clg_name"]; ?></td>
		<td><?php echo $row["branch"]; ?></td>
		<td><?php echo $row["first"]; ?></td>
		<td><?php echo $row["second"]; ?></td>
		<td><?php echo $row["third"]; ?></td>
		<td align="center"><a href="delete_training_stu_for_tpo.php?id=<?php echo $row["id"]; ?>"><input type="button" name="delete" value="Delete" onclick="f();"></a></td>
	
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