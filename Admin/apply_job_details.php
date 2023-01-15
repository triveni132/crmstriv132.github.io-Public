<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>vc</title>
	<style type="text/css">
		.div1{
			background-color: blue;
			height: 90px;
			color: white;
		}
		.img1{
			width:20px;
			margin-left: 10px;
			margin-top: 10px;
		}
		.img2{
			width:20px;
			float: right;
			margin-right: 20px;
			margin-top: 10px;
		}
		.div2{
			background-color:white;
			line-height: 30px;
			padding: 10px;
		}
		.h1{
			float: left;
			width: 246px;
			margin-left: 2px;
			line-height: 1px;
			background-color: white;
			padding: 20px;
			margin-top: -15px;
		}
		.h2{
			float: left;
			width: 305px;
			line-height: 1px;
			margin-top: 19px;
			background-color: white;
			padding: 20px;
			margin-left: 2px;
			margin-top:-15px;
		}
		.h3{
			float: left;
			width: 300px;
			line-height: 1px;
			background-color: white;
			padding: 20px;
			margin-left: 2px;
			margin-top: -15px;
		}
		.h4{
			float: left;
			width: 312px;
			line-height: 1px;
			background-color: white;
			padding: 20px;
			margin-left: 2px;
			margin-top: -15px;
		}
		.h5{
			background-color: white;
			width: 246px;
			padding: 20px;
			margin-left: 2px;
			margin-top: -21px;
			line-height: 60px;
			float: left;
			margin-right: 2px;
		}
		.h6{
			background-color:white;
			width: 1020px;
			float: left;
			height: 80px;
			padding: 10px;
			margin-top: -21px;
		}
		.h7{
			margin-left: 2px;
			background-color: white;
			width: 246px;
			line-height: 1px;
			padding: 20px;
			float: left;
			margin-top: -20px;
			margin-right: 2px;
		}
		.h8{
			background-color:white;
			width: 323px;
			float: left;
			margin-top: -20px;
			padding: 13px;
			margin-right: 2px;
		}
		.h9{
			background-color:white;
			padding: 20px;
			width: 300px;
			float: left;
			line-height: 1px;
			margin-top: -20px;
			margin-right: 2px;
		}
		.h10{
			background-color:white;
			width:307px;
			padding: 20px;
			float: left;
			line-height: 1px;
			margin-top: -20px;
		}
		.h11{
			background-color:white;
			width: 247px;
			padding: 20px;
			line-height: 1px;
			margin-right: 78%;
			float: left;
			margin-left: 2px;
			margin-top: -20px;
		}
		.h12{
			background-color:white;
			float:right;
			width: 1000px;
			margin-right: 2px;
			margin-top: -60px;
			line-height: 1px;
			padding: 20px;
		}
		.h13{
			background-color:white;
			width: 247px;
			margin-left: 2px;
			padding: 20px;
			float: left;
			line-height: 1px;
			margin-top: -16px;
			margin-right: 2px;
		}
		.h14{
			background-color:white;
			width: 309px;
			float: left;
			padding: 20px;
			line-height: 1px;
			margin-top: -20px;
			margin-right: 2px;
		}
		.h15{
			background-color:white;
			width:303px;
			float:left;
			padding: 20px;
			line-height: 1px;
			margin-top: -20px;
			margin-right: 2px;
		}
		.h16{
			background-color:white;
			width:304px;
			padding:20px;
			line-height:1px;
			float: left;
			margin-top: -20px;
		}
		.h17{
			background-color:white;
			padding:20px;
			width:40%;
			float:left;
			margin-left: 2px;
			margin-top: -18px;
			line-height: 20px;
		}
		.h18{
			background-color:white;
			width:715px;
			float: left;
			padding: 20px;
			margin-top: -18px;
		}
		.h19{
			background-color:white;
			padding: 20px;
			line-height: 1px;
			float: left;
			width: 96.7%;
			margin-left: 2px;
			margin-top: -20px;
		}
		.button2{
			background-color:blue;
			color: white;
		}
	</style>
</head>
<body style="background-color:antiquewhite;">

<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$company_name = $_POST['company_name'];
     $job_title = $_POST['job_title'];
     $salary = $_POST['salary'];
     $job_description = $_POST['job_description'];
     $job_location = $_POST['job_location'];
     $no_of_opening = $_POST['no_of_opening'];
     $apply_date = $_POST['apply_date'];
     $last_date = $_POST['last_date'];
$select="SELECT new_vacancy set id='" . $_POST['id'] . "', company_name='" . $_POST['company_name'] . "', job_title='" . $_POST['job_title'] . "', salary='" . $_POST['salary'] . "', job_description='" . $_POST['job_description'] . "', job_location='" . $_POST['job_location'] . "', no_of_opening='" . $_POST['no_of_opening'] . "', apply_date='" . $_POST['apply_date'] . "', last_date='" . $_POST['last_date'] . "' WHERE id='" . $_POST['id'] . "'";
mysqli_query($con, $select) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>



	<div class="div1">
		<img src="lg.jpg" class="img1">
		<img src="sg.jpg" class="img2">
		<h2 style="margin-left: 50px;">View Vacancy Detail</h2>
	</div><br>
	<div class="div2">
		<h3>View Vacancy Detail</h3>
	</div><br>

	<div style="height: 500px;">
		
			<h3 class="h1">Job Title</h3>
			<p class="h2">"<?php echo $row['company_name']; ?>"</p>
			<h3 class="h3">Company Name</h3>
			<h5 class="h4">Reigre Pvt.Ltd</h5>
			<h3 class="h5">Job Description</h3>
			<h5 class="h6">hii</h5>
			<h3 class="h7">Monthly in-hand Salary</h3>
			<h5 class="h8">10k-25k</h5>
			<h3 class="h9">Job Location</h3>
			<h5 class="h10">H321 Sactor 4 Noida</h5>
			<h3 class="h11">No of  Opneing</h3>
			<h5 class="h12">10</h5>
			<h3 class="h13">Apply Date</h3>
			<h5 class="h14">14/09/2009</h5>
			<h3 class="h15">Last Date</h3>
			<h5 class="h16">17-10-2019</h5>
			<h3 class="h17">Upload Resume:</h3>
			<h5 class="h18"><button type="submit" value="Choose File">Choose File</button>No file chosen</h5>
			<h4 class="h19"><center><button type="submit" value="Apply Now" class="button2">Apply Now</button></center></h4>
	</div>
	<?php } ?>
</body>
</html>