
<!DOCTYPE html>
<html>
<head>
	<title>History Of Applied Training</title>
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
		<a href="after_login_student_training.php" class="back">Back</a>
<center>
	<h1 class="main">History Of Applied Training</h1>
</center>
</div><br><br>
<?php
include("db.php"); //database code
include("auth_student_training.php");
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
		<th>training_title</th>
		<th>training_description</th>
		<th>fees</th>
		<th>training_location</th>
		<th>start_date</th>
		<th>last_date</th>
		<th>Delete</th>
	</tr>
	<?php
	$count=1;
	$sel_query = "select * from  history_applied_training ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result))
	{ ?>
	<tr>
	
		<td> <?php echo $count; ?></td>
		<td><?php echo $row["company_name"]; ?></td>
		<td><?php echo $row["training_title"]; ?></td>
		<td><?php echo $row["training_description"]; ?></td>
		<td><?php echo $row["fees"]; ?></td>
		<td><?php echo $row["training_location"]; ?></td>
		<td><?php echo $row["start_date"]; ?></td>
		<td><?php echo $row["last_date"]; ?></td>
		<td align="center"><a href="delete_applied_training.php?id=<?php echo $row["id"]; ?>"><input type="button" name="delete" value="Delete" onclick="f();"></a></td>	
	
	
	</tr>
<?php $count++; }?>	
</table>

<script>
	  function f() {
                alert('Are you sure to delete ');
            }
</script>

</body>
</html></body>
</html>