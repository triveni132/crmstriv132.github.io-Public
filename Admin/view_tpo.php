
<!DOCTYPE html>
<html>
<head>
	<title>View TPO</title>
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
	<h1>View TPO</h1>
</center>
</div><br><br>

<table border="1px;" align="center">
	
	<tr>
		<th>S.No.</th>
		<th>email</th>
		<th>tpo_name</th>
		<th>tpo_id</th>
		<th>Contact_no</th>
	</tr>
	<tr>
		<?php
	$count=1;
	$sel_query = "select * from registration_tpo ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result))
	{
		?>
		<td> <?php echo $count; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["tpo_name"]; ?></td>
		<td><?php echo $row["tpo_id"]; ?></td>
		<td><?php echo $row["Contact_no"]; ?></td>
		</tr>
<?php $count++; }?>	
</table>


</body>
</html>