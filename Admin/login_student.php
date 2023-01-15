<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Student</title>
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

</head>
<body>
 <?php
include("header_home.php");
?>


<?php
    require('db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['enrollment_no'])){
        
        $enrollment_no = $_REQUEST['enrollment_no']; 
        $password = $_REQUEST['password'];
        
    //Checking is user existing in the database or not
        $query = "SELECT * FROM student_registration WHERE enrollment_no='$enrollment_no' and password='$password'";
        $result = mysqli_query($con,$query) or die(mysqli_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['enrollment_no'] = $enrollment_no;
            header("Location: after_login_student.php"); // Redirect user to index.php
            }
            else{
                echo "<div class='form'><h3>Enrollment Number/password is incorrect.</h3><br/>Click here to <a href='login_student.php'>Login</a></div>";
                }
    }else{
?>
 <center>
        <div class="form">
            <fieldset style="background-color:  white; height: 400px; width: 550px; padding: 20px; margin: 100px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">LOGIN STUDENT</h1>
                
                <form action="" method="post" name="login">

                    <table>

                        <tr>
                            <td>Enrollment Number of Student : </td>
                            <td><input type="text" name="enrollment_no" placeholder="Enter Your Enrollment Number" required /></td>
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
                            <td><p>Not registered yet? <a href='registration_student.php'>Register Here</a></p></td>
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