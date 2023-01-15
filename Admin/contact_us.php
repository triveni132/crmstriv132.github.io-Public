<!DOCTYPE html>
<html>
<head>
	<title>Contact us page</title>
</head>
		
<style>
	.new{
		background-color: darkblue;
		padding: 10px;
		color: white;
	}
	.table{
		   margin: 30px;
	}
	.form{
		margin-bottom: 30px;
	}
	input[type="text"]
	{
		 width: 100%;
  padding: 15px;
  margin: 10px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
	}
	input[type=submit] {
        background-color: green;
        color: white;
        padding: 8px 20px;
        border: none;
        cursor: pointer;
        margin-right: 60px;
    }
    
    input[type=submit]:hover {
        background-color: blue;
    }
</style>
<?php
include("header_home.php");
?>

<body bgcolor="whitesmoke">
	<br><br><br><br><br><center>
<div class="contact">
  <b class="side">Information</b><br><br>
  <b class="gpc">GOVERNMENT POLYTECHNIC COLLEGE BALAGHAT</b><br><br>
   <b class="last_text"> Phone </b> : <a href="#" class="add"> 07632 242443</a><br><br>
    <b class="last_text"> Email</b> : <a href="#" class="add">infogpcb@gmail.com</a><br><br>
   <b class="last_text">Website </b>: <a href="https://www.gpcbalaghat.ac.in/" class="add"> www.gpcbalaghat.ac.in </a><br><br>
   <b class="last_text">Address </b>:<b class="add"> Moti Nagar, Ward No 33,<br> Balaghat, Madhya Pradesh 481001 </b><br><br>
  
</div>
</center>
<center>
<fieldset style="background-color:  antiquewhite; height: 400px; width: 400px;">
                <legend></legend>
	<form>

	
<table  class="table">

		<tr>
             <td> Name :
             <td><input type="text" name="name" placeholder="Your Name"></td>
        </tr>
        <tr>
             <td> Contact Number :
             <td><input type="text" name="contact_no" placeholder="Your Problem"></td>
        </tr>
        <tr>
             <td> Issue :
             <td><input type="text" name="issue" placeholder="Your Problem"></td>
        </tr>
        <tr>
   			<td> <input type="submit" name="submit" value="submit" onclick="f();"></td>
        </tr>
</table>
</center>
</form>
</fieldset><br><br><br><br>

<script type="text/javascript">
            function f() {
                alert('New vacancy added successfully....');
            }
</script>
    <?php
    include("footer.php");
    ?>
              
</body>
</html>