<?php
include_once 'db.php';
if(count($_POST)>0) {
mysqli_query($con,"UPDATE  registration_company set id='" . $_POST['id'] . "', email='" . $_POST['email'] . "',  companyname='" . $_POST['companyname'] . "', companyid='" . $_POST['companyid'] . "' ,ceo_name='" . $_POST['ceo_name'] . "', pname='" . $_POST['pname'] . "', Contact_no='" . $_POST['Contact_no'] . "', company_address='" . $_POST['company_address'] . "', provided='" . $_POST['provided'] . "' WHERE userid='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($con,"SELECT * FROM  registration_company WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
First Name: <br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Last Name :<br>
<input type="text" name="companyname" class="txtField" value="<?php echo $row['companyname']; ?>">
<br>
City:<br>
<input type="text" name="companyid" class="txtField" value="<?php echo $row['companyid']; ?>">
<br>
Email:<br>
<input type="text" name="ceo_name" class="txtField" value="<?php echo $row['ceo_name']; ?>">
<br>
Email:<br>
<input type="text" name="pname" class="txtField" value="<?php echo $row['pname']; ?>">
<br>

Email:<br>
<input type="text" name="Contact_no" class="txtField" value="<?php echo $row['Contact_no']; ?>">
<br>

Email:<br>
<input type="text" name="company_address" class="txtField" value="<?php echo $row['company_address']; ?>">
<br>

Email:<br>
<input type="text" name="provided" class="txtField" value="<?php echo $row['provided']; ?>">
<br>


<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>