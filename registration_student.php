<!DOCTYPE html>
<html>

<head>
    <title> student Sign up page</title>
    </head>
    <style>

input[type=text], input[type=password], input [type=date], input [type=radio] {
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
include("header.php");
?>




<?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['enrollment_no'])){
        $enrollment_no = $_REQUEST['enrollment_no'];
        $fullname = $_REQUEST['fullname'];
        $fname = $_REQUEST['fname'];
        $aadhar = $_REQUEST['aadhar'];
        $contact_no = $_REQUEST['contact_no'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['dob'];
        $address = $_REQUEST['address'];
        $category = $_REQUEST['category'];
        $clg_name = $_REQUEST['clg_name'];
        $branch = $_REQUEST['branch'];
        $gender = $_REQUEST['gender'];
        $what_u_want = $_REQUEST['what_u_want'];
        $first = $_REQUEST['first'];
        $second = $_REQUEST['second'];
        $third = $_REQUEST['third'];
        $fourth = $_REQUEST['fourth'];
        $fifth = $_REQUEST['fifth'];
        $sixth = $_REQUEST['sixth'];
        $cgpa = $_REQUEST['cgpa'];
        $passout_year = $_REQUEST['passout_year'];
        $resume = $_REQUEST['resume'];
        $password = $_REQUEST['password'];

        $trn_date = date("Y-m-d H:i:s");

        $query = "INSERT into student_registration (enrollment_no, fullname, fname, aadhar, contact_no, email, dob, address, category, clg_name, branch, gender, what_u_want, first, second, third, fourth, fifth, sixth, cgpa, passout_year, resume, password, trn_date) VALUES ('$enrollment_no', '$fullname', '$fname', '$aadhar', '$contact_no', '$email', '$dob', '$address', '$category', '$clg_name', '$branch', '$gender', '$what_u_want', '$first', '$second', '$third', '$fourth','$fifth', '$sixth', '$cgpa', '$passout_year', '$resume', '$password','$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Now you will be verified by admin for which you have to wait for 24 hours.</h3><br/>Click here to <a href='index.php'>Home</a></div>";
        }
    }else{
?>


<br><br><br><br>
    <center>
        <div>
            <fieldset style="background-color: white; height: 2300px; width: 600px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">REGISTRATION STUDENT</h1><br>
               <marquee class="marq" >After register you will be verified by admin for which you will have to wait up to 24 hours.</marquee><br><br><br><br>
                <form>  
                    <h2>PERSONAL INFORMATION</h2><br>
                    <table>
                        <tr>
                            <td> Enrollment Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="enrollment_no" placeholder="  Your Enrollment number"  maxlength="11" required></td>
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
                            <td>Aadhar Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="aadhar" placeholder=" Your Aadhar Number" maxlength="12" required></td>
                        </tr>
                     
                        <tr>
                            <td>Contact Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="contact_no" placeholder=" Your Contact Number" maxlength="10" required></td>
                        </tr>
                        
                         <tr>
                            <td>Email :<span class="astrick">*</span></td>
                            <td><input type="text" name="email" placeholder="Enter your Email" maxlength="25" required></td>
                        </tr>

                        
                      <tr>
                            <td>Date of Birth :  <span class="astrick">*</span></td>
                            <td><input type="date" name="dob" placeholder="Enter your Date of Birth" required></td>
                        </tr>
                        
                            <tr>
                                <td>Address : <span class="astrick">*</span></td>
                                <td>
                                    <textarea class="address-stu" name="address" rows="2" cols="20" maxlength="100" required> </textarea>
                                </td>
                            </tr>
                            <tr><td>Category : <span class="astrick">*</span></td>
                                <td><select name="category">
                                        <option>Category</option>               
                                        <option>OBC</option>
                                        <option>SC/ST</option>
                                        <option>General</option>
                                        <option>Other</option>
        </select></td>
             
                        </tr>
                        <tr>
                            <td> Name of College : <span class="astrick">*</span></td>
                            <td><input type="text" name="clg_name" placeholder="Enter your College Name" maxlength="25" required></td>
                        </tr>
                        <td>Branch : <span class="astrick">*</span></td>
                        <td><select name="branch">
                                <option>Branch</option>
                                <option>Computer Science & Engineering</option>
                                <option>Civil</option>
                                <option>Mechanical</option>
                                <option>Electrical</option>
                            </select></td>
                        </tr>
                    
                        <tr>
                            <td>Gender : <span class="astrick">*</span></td>
                            <td>Female <input type="radio" name="gender"> Male <input type="radio" name="gender"> Other <input type="radio" name="gender">
                            </td>
                        </tr>
                        </table><br>
                    <table>
                        <tr>
                            <td>What do you want to get through this website? 
                               <br> Please choose any one of these options.. <span class="astrick">*</span> <br><br>
                                     <select  name="what_u_want">
                                            <option>What you want ? </option>
                                            <option>Job</option>
                                            <option>Training(Industrial/Voccational)</option>
                                            
                                        </select></td>
                        </tr>
                    </table><br><br><br><br>
                    <h2>ACADEMIC HISTORY</h2><br>
                    <table>

                        <tr>
                            <td>Your 1st sem SGPA :<span class="astrick">*</span> </td>
                            <td><input type="text" name="first" placeholder="enter your 1st sem SGPA"  maxlength="3" required></td>
                        </tr>
                        <tr>
                            <td>Your 2nd sem SGPA : <span class="astrick">*</span></td>
                            <td><input type="text" name="second" placeholder="enter your 2nd sem SGPA" maxlength="3" required></td>
                        </tr>

                        <tr>
                            <td>Your 3rd sem SGPA  : </td>
                            <td><input type="text" name="third" placeholder="enter your 3rd sem SGPA" maxlength="3" required></td>
                        </tr>

                        <tr>
                            <td>Your 4th sem SGPA : </td>
                            <td><input type="text" name="fourth" placeholder="enter your 4th sem SGPA" maxlength="3"></td>
                        </tr>

                        <tr>
                            <td>Your 5th sem SGPA : </td>
                            <td><input type="text" name="fifth" placeholder="enter your 5th sem SGPA" maxlength="3"></td>
                        </tr>

                        <tr>
                            <td>Your 6th sem SGPA : </td>
                            <td><input type="text" name="sixth" placeholder="enter your 6th sem SGPA" maxlength="3"></td>
                        </tr>

                        <tr>
                            <td>CGPA(1st+2nd+3rd+4th+5th+6th sem) : </td>
                            <td><input type="text" name="cgpa" placeholder="enter your CGPA" maxlength="3"></td>
                        </tr>
                        <tr>
                            <td>Diploma pass out year : </td>
                            <td><input type="text" name="passout_year" placeholder="Enter your diploma pass out year" maxlength="7"></td>
                        </tr>
                        <tr>
                            <td>Resume :</td>
                            <td><input type="file" name="resume" placeholder="Resume" ></td>
                        </tr>

                    </table>
                    <table>
                        <tr>
                            <td>  Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="password" placeholder="enter password" id="password" maxlength="15" required></td>
                        </tr>
                        <tr>
                            <td> Confirm Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="confirm_password" placeholder="confirm password" id="confirm_password" maxlength="15" required></td>
                        </tr>
                    </table><br><br>
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