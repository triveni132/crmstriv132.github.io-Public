<?php

include("db.php");

if(isset($_POST['submit']))
{
	// variables for input data 
	$company_name = $_POST['company_name'];
	$job_title = $_POST['job_title'];
	$salary = $_POST['salary'];
	$job_description = $_POST['job_description'];
	$job_location = $_POST['job_location'];
	$no_of_opening = $_POST['no_of_opening'];
	$apply_date = $_POST['apply_date'];
	$last_date = $_POST['last_date'];

	// sql query for inserting data into database
	$result = mysqli_query($con, "INSERT INTO new_vacancy(company_name,job_title,salary,job_description,job_location,no_of_opening,apply_date,last_date) VALUES('$company_name','$job_title','$salary','$job_description','$job_location','$no_of_opening','$apply_date','$last_date')");

	//display success message
	echo "<font color='green'>Job Inserted Successfully..";
	echo "<br><a href='homepage.php'>Go to Home</a>";
}
?>