<?php

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_vacancy WHERE id=$id"; 
$result = mysqli_query($mysqli,$query) or die ( mysqli_error("deleted"));
header("Location: homepage.php"); 

?>