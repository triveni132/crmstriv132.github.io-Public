<!DOCTYPE html>
<html>
<head>

	<title>Forgot password Page</title>
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
	input[type="text"], input[type="date"]
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
<body bgcolor="lightgray">
<div class="new">
	<center>
	<h1>Forgot Password</h1>
</div><br><br>

</center>
<center>
<fieldset style="background-color:  antiquewhite; height: 350px; width: 500px;">
                <legend></legend>
	<form class="form" action="#" method="POST">

<h1>Forgot Password ?</h1>
<b>You can reset your password here..</b><br><br>	
<table  class="table">

		<tr>
             <td> Email Address :
             <td><input type="text" name="email" placeholder="Email Address"></td>
        </tr>
   </table>
   <center>
     <input type="submit" name="submit" value="Reset Password" onclick="f();">
</center>
</center>
</form>
</fieldset>

<script type="text/javascript">
            function f() {
                alert('Reset Password');
            }
</script>
                    
</body>
</html>