<?php
 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Company</title>
<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 22px;
  display: inline-block;
  border: none;
  background: lightgray;
  }

input[type=text]:focus, input[type=password]:focus {
  background-color: lightgray;
  outline: none;
}


    input[type=submit] {
        background-color: green;
        color: white;
        padding: 20px;
        border: none;
        cursor: pointer;
        margin-right: 60px;
    }
    
    input[type=submit]:hover {
        background-color: blue;
    }
    

</style>

<style>
  .linecolor{
    background-color: #010c29;
    padding: 20px ;
}
.down {
  display: inline-block;
  font-size: 20px; 
  margin-left: 10px;
  margin-right: 20px;
  color: white;
}
.camp{
  display: inline-block;
  font-size: 25px; 
  margin-left: 20px;
  margin-right: 60px;
  color: white;
}

.job{
 display: inline-block;
  font-size: 20px; 
  color: white; 
}
.content {
  display: none;
  position: fixed;
  font-size: 20px;
  background-color: skyblue;
}

.content a {
  color: black;
  padding: 16px;
  text-decoration: none;
  display: block;
}

.content a:hover {background-color: deepskyblue;}

.down:hover .content {display: block;}

.down:hover 
}
.para{
    font-size: 20px;
    margin-left: 70px;
}

.crms{
    margin-left: 80px;
}
.text{
    margin-left: 70px;
}
.upper{
  color: white;
}
.up{
  margin-right: 10px;
  background-color: black;
    padding: 10px ;
}
.text_crms{
  color: white;
}
.upper{
text-decoration: none;
}
.down a:hover{
  background-color: deepskyblue;
  color: white;
}
.admin{
  display: inline-block;
  font-size: 20px; 
  margin-left: 80px;
  margin-right: 10px;
  font-family: serif;
}
</style>


</head>
<body bgcolor="lightgray">
 

  <img src="crms_logo.jpg" height="80px" width="1340px">
<div class="linecolor">
  <div class="camp">
  <a href="index.php" class="upper"> <b style="color: red; font-size: 40px;"  class="crms">CRMS</b></a>
  </div>
<div class="down">
 <b><a href="about_us.php" class="upper">About us </a> </b>
  </div>


<div class="down">
  <b><a href="#" class="upper">TPO</a> </b>
  <div class="content">
    <a href="registration_tpo.php">Registration</a>
    <a href="login_tpo.php">Login</a>
</div>
</div>

<div class="down">
  <b><a href="#" class="upper">Company</a> </b>
  <div class="content">
    <a href="registration_company.php">Registration</a>
    <a href="login_company.php">Login</a>
</div>
</div>
<div class="down">
  <b><a href="#" class="upper">Student(For Job)</a> </b>
  <div class="content">
    <a href="registration_student_for_job.php">Registration for Job</a>
    <a href="login_student_for_job.php">Login for Job</a>
</div>
</div>
<div class="down">
  <b><a href="#" class="upper">Student(For Training)</a> </b>
  <div class="content">
    <a href="registration_student_for_training.php">Registration for Training</a>
    <a href="login_student_for_training.php">Login for Training</a>
</div>
</div>

<div class="down">
  <b><a href="contact_us.php" class="upper">Help </a></b>
</div>

<div class="admin">
  <b><a href="Admin/admin_login.php" class="ad">Admin</a></b>
</div><br><br>

</div>



<?php
    require('db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
        
        $email = stripslashes($_REQUEST['email']); // removes backslashes
        $email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        
    //Checking is user existing in the database or not
        $query = "SELECT * FROM registration_company WHERE email='$email' and password='$password'";
        $result = mysqli_query($con,$query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['email'] = $email;
            header("Location: after_login_company.php"); // Redirect user to index.php
            }
            else{
                echo "<div class='form'><h3>Email-id/password is incorrect.</h3><br/>Click here to <a href='login_company.php'>Login</a></div>";
                }
    }else{
?>
 <center>
        <div class="form">
            <fieldset style="background-color:  white; height: 400px; width: 450px; padding: 20px; margin: 100px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">LOGIN COMPANY</h1>
                
                <form action="" method="post" name="login">

                    <table>

                        <tr>
                            <td>Email of Company : </td>
                            <td><input type="text" name="email" placeholder="Enter Your Email-id" required /></td>
                        </tr>

                        <tr>
                            <td> Password :</td>
                            <td><input type="password" name="password" placeholder="Enter Password" required /></td>
                        </tr>
                    <center>   
                    <table>
                        <tr>
                        <td>  <input name="submit" type="submit" value="Login" /></td>
                        <td><a href="forgot_password.php">Forgot password</a></td>
                        </tr><br>
                           <tr>
                            <td><p>Not registered yet? <a href='registration_company.php'>Register Here</a></p></td>
                           </tr>
                    </table>
                   </center>
                </form>

        </div>
        </fieldset>
    </center>
  </div>
<?php } ?>




</body>
</html>

