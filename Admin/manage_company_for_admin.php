
<!DOCTYPE html>
<html>
<head>
	<title>Manage Company</title>
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
	<h1>Manage Company</h1>
</center>
</div><br><br>

<table border="1px;" align="center">
	
	<tr>
		<th>S.No.</th>
		<th>email</th>
		<th>companyname</th>
		<th>companyid</th>
		<th>ceo_name</th>
		<th>pname</th>
		<th>Contact_no</th>
		<th>company_contact_no</th>
		<th>company_address</th>
		<th>provided</th>
		<th>Delete</th>
	</tr>
	<tr>
		<?php
	$count=1;
	$sel_query = "select * from registration_company ORDER BY id desc;";
	$result = mysqli_query($con,$sel_query);
	while($row = mysqli_fetch_assoc($result))
	{
		?>
		<td> <?php echo $count; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["companyname"]; ?></td>
		<td><?php echo $row["companyid"]; ?></td>
		<td><?php echo $row["ceo_name"]; ?></td>
		<td><?php echo $row["pname"]; ?></td>
		<td><?php echo $row["Contact_no"]; ?></td>
		<td><?php echo $row["company_contact_no"]; ?></td>
		<td><?php echo $row["company_address"]; ?></td>
		<td><?php echo $row["provided"]; ?></td>
		<td align="center"><a href="delete_company_admin.php?id=<?php echo $row["id"]; ?>"><input type="button" name="delete" value="Delete" onclick="f();"></a></td>
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