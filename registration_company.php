<html>
<head>
    <title> Company Sign up page</title>
    </head>
<style>
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 10px 0 22px 0;
  display: inline-block;
  border: none;
  background: lightgray;
  }

input[type=text], input[type=password] {
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
    
    input[type=reset] {
        background-color: green;
        color: white;
        padding: 8px 20px;
        border: none;
        cursor: pointer;
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
    if (isset($_REQUEST['email'])){
        $email = $_REQUEST['email']; // removes backslashes
        $companyname = $_REQUEST['companyname'];
        $companyid = $_REQUEST['companyid'];
        $ceo_name = $_REQUEST['ceo_name'];
        $pname = $_REQUEST['pname'];
        $Contact_no = $_REQUEST['Contact_no'];
        $company_contact_no = $_REQUEST['company_contact_no'];
        $company_address = $_REQUEST['company_address'];
        $provided = $_REQUEST['provided'];
        $password = $_REQUEST['password'];

        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into registration_company (email, companyname, companyid, ceo_name, pname, Contact_no, company_contact_no, company_address, provided, password, trn_date) VALUES ('$email', '$companyname', '$companyid', '$ceo_name', '$pname', '$Contact_no', '$company_contact_no', '$company_address', '$provided', '$password','$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Now you will be verified by admin for which you have to wait for 24 hours.</h3><br/>Click here to <a href='index.php'>Home</a></div>";
        }
    }else{
?>

<br><br><br><br>
    <center>
        <div>
            <fieldset style="background-color:  white; height: 1200px; width: 600px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">REGISTRATION COMPANY</h1><br>
                <marquee class="marq">After register you will be verified by admin for which you will have to wait up to 24 hours.</marquee><br><br><br><br>
               
                <form action="" method="POST">

                    <table>
                         <tr>
                            <td>Email of Company : <span class="astrick">*</span></td>
                            <td><input type="text" name="email" placeholder="enter company's email id" maxlength="25" required></td>
                        </tr>

                        <tr class="">
                            <td> Company Name :<span class="astrick">*</span></td>
                            <td><input type="text" name="companyname" placeholder="enter your company name" maxlength="25" required></td>
                        </tr>

                        <tr>
                            <td> Company Id : <span class="astrick">*</span></td>
                            <td><input type="text" name="companyid" placeholder="enter your company's id" maxlength="25" required></td>
                        </tr>


                         <tr>
                            <td>Company's CEO Name : <span class="astrick">*</span></td>
                            <td><input type="text" name="ceo_name" placeholder=" Enter company's CEO Name" maxlength="25" required></td>
                        </tr>
                        
                        <tr>
                            <td>Name of contact person : <span class="astrick">*</span></td>
                            <td><input type="text" name="pname" placeholder="enter your name" maxlength="25" required></td>
                        </tr>
                        <tr>
                            <td>Your Contact Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="Contact_no" placeholder=" enter your contact number" maxlength="10" required></td>
                        </tr>
                       
                        <tr>
                            <td>Company's Contact Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="company_contact_no" placeholder=" Enter company's contact number" maxlength="10" required></td>
                        </tr>

                        <tr>
                            <tr>
                                <td> Address of company : <span class="astrick">*</span></td>
                                <td>
                                    <textarea class="address-com" rows="3" maxlength="100" name="company_address" cols="20" class="form-control" placeholder=" Address" required></textarea>
                                </td>
                            </tr>
                    </table>
                    <table>
                        <tr>
                            <td>What do you want to provide to the students ? <span class="astrick">*</span>   </td>
                                    </tr>
                        <tr>
                            <td>1. <input type="checkbox" name="provided"> Job </td>
                        </tr>
                        <tr>
                            <td>2. <input type="checkbox" name="provided"> Training(industrial/Vocational/Other)</td>
                        </tr>
                        </table>

                        <table>
                   
                    </table><br>
                    <table>
                        <tr>
                            <td> Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="password" id="password" placeholder="Enter Password" maxlength="15" required></td>
                        </tr>
                        <tr>
                            <td>Confirm Password :<span class="astrick">*</span></td>
                            <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" maxlength="15" required></td>
                        </tr>
                    </table><br><br>
                    <table>
                        <tr>
                            <td><input type="submit" name="submit" value="Register" onclick="f();">   </td>
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