<!DOCTYPE html>
<html>

<head>
    <title> Registration student for training </title>
    </head>
    <style>

input[type=text], input[type=password], input [type=date], input[type=file], input [type=radio] {
  width: 100%;
  padding: 15px;
  margin: 10px 0 22px 0;
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
        padding: 8px 20px;
        border: none;
        cursor: pointer;
        margin-right: 60px;
    }
    
    input[type=submit]:hover {
        background-color: blue;
    }
    
    input[type=reset] {
        background-color: green;
        color: white;
        padding: 8px 20px;
        border: none;
        cursor: pointer;
        float: right;
        margin-right: 60px;
    }
    
    input[type=reset]:hover {
        background-color: blue;
    }
    .astrick{
  color: red;
}
.marq{
    color: red;
}

</style>

<body bgcolor="lightgray">
    <?php
include("header_home.php");
?>


<?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['enrollment_num'])){
        $enrollment_num = $_REQUEST['enrollment_num'];
        $fullname = $_REQUEST['fullname'];
        $fname = $_REQUEST['fname'];
        $clg_name = $_REQUEST['clg_name'];
        $branch = $_REQUEST['branch'];
        $first = $_REQUEST['first'];
        $second = $_REQUEST['second'];
        $third = $_REQUEST['third'];
        $password = $_REQUEST['password'];

        $trn_date = date("Y-m-d H:i:s");

$query = "INSERT into registration_for_training (enrollment_num, fullname, fname,clg_name, branch,first, second, third,password, trn_date) VALUES  ('$enrollment_num', '$fullname', '$fname','$clg_name', '$branch','$first', '$second', '$third','$password','$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Now you will be verified by admin for which you have to wait for 24 hours.</h3><br/>Click here to <a href='index.php'>Home</a></div>";
        }
    }else{
?>


<br><br><br><br>
    <center>
        <div>
            <fieldset style="background-color: white; height: 1100px; width: 600px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">REGISTRATION FOR TRAINING</h1><br>
               <marquee class="marq" >After register you will be verified by admin for which you will have to wait up to 24 hours.</marquee><br><br><br><br>
                <form>  
                    <table>
                        <tr>
                            <td> Enrollment Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="enrollment_num" placeholder="  Your Enrollment number"  maxlength="11" required></td>
                        </tr>
                       
                        <tr>
                            <td> Student Name : <span class="astrick">*</span></td>
                            <td><input type="text" name="fullname" placeholder="Enter your full name" maxlength="25" required></td>
                        </tr>
                                
                        <tr>
                            <td> Father's Name :<span class="astrick">*</span></td>
                            <td><input type="text" name="fname" placeholder="Enter your Father's name" maxlength="25" required></td>
                        </tr>
                        
                        <tr>
                            <td> Name of College : <span class="astrick">*</span></td>
                            <td><input type="text" name="clg_name" placeholder="Enter your College Name" maxlength="50" required></td>
                        </tr>
                        <td>Branch : <span class="astrick">*</span></td>
                        <td><select name="branch">
                                <option>Computer Science & Engineering</option>
                                <option>Civil Engineering</option>
                                <option>Mechanical Engineering</option>
                                <option>Electrical Engineering</option>
                            </select></td>
                        </tr>
                    
            
                         <tr>
                            <td>Your 1st sem SGPA :<span class="astrick">*</span> </td>
                            <td><input type="file" name="first" placeholder="enter your 1st sem SGPA"  maxlength="3" required></td>
                        </tr>
                        <tr>
                            <td>Your 2nd sem SGPA : <span class="astrick">*</span></td>
                            <td><input type="file" name="second" placeholder="enter your 2nd sem SGPA" maxlength="3" required></td>
                        </tr>

                        <tr>
                            <td>Your 3rd sem SGPA  : </td>
                            <td><input type="file" name="third" placeholder="enter your 3rd sem SGPA" maxlength="3" required></td>
                        </tr>

                       <tr>
                            <td>  Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="password" placeholder="enter password" id="password" maxlength="15" required></td>
                        </tr>
                        <tr>
                            <td> Confirm Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="confirm_password" placeholder="confirm password" id="confirm_password" maxlength="15" required></td>
                        </tr>
                        <table>
                        <tr>
                            <td> <input type="submit" name="submit" value="submit" onclick="f();"></td>
                            <td> </td>
                            <td><input type="reset" name="reset" value="reset"> </td>
                        </tr>
                    </table>
 </form>

        </div>
        </fieldset>
    </center>
    <script type="text/javascript">
            function f() {
                alert('please wait .... After registration, you will be verified by the admin for which you will need to wait 24 hours .');
            }
        </script>

 <?php } ?>



</body>
</html>