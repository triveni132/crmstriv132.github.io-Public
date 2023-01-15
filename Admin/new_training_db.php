<?php

include("db.php");

if(isset($_POST['submit']))
{
	$training_title = $_POST['training_title'];
	$training_description = $_POST['training_description'];
	$fees = $_POST['fees'];
	$training_location = $_POST['training_location'];
	$start_date = $_POST['start_date'];
	$last_date = $_POST['last_date'];

	$result = mysqli_query($con, "INSERT INTO new_training(training_title,training_description,fees,training_location,start_date,last_date) VALUES('$training_title','$training_description','$fees','$training_location','$start_date','$last_date')");

	//display success message
	echo "<font color='green'>New Training added successfully.";
	echo "<br><a href='homepage.php'>Go to Home</a>";
}
?>