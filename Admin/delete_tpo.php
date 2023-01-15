<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM registration_tpo WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error("deleted"));
header("Location: manage_tpo.php"); 

?>