
<html>
<head>
    
    <title>TPO Registration</title>
    
</head>
<style>
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
        margin-right: 60px;
    }
    
    input[type=reset]:hover {
        background-color: blue;
    }

    input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 10px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  }

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
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
        $tpo_name = $_REQUEST['tpo_name'];
        $tpo_id = $_REQUEST['tpo_id'];
        $Contact_no = $_REQUEST['Contact_no'];
        $password = $_REQUEST['password'];
    

        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into registration_tpo (email, tpo_name, tpo_id, Contact_no, password, trn_date) VALUES ('$email', '$tpo_name', '$tpo_id', '$Contact_no' , '$password','$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Now you will be verified by admin for which you have to wait for 24 hours.</h3><br/>Click here to <a href='index.php'>Home</a></div>";
        }
    }else{
?>


<br><br><br><br>
    <center>
        <div>
            <fieldset style="background-color:  white; height: 800px; width: 600px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">REGISTRATION TPO</h1><br>
                <marquee class="marq" >After register you will be verified by admin for which you will have to wait up to 24 hours.</marquee><br><br><br><br>
                <form>

                    <table>
                        <tr>
                            <td>TPO's Email-Id : <span class="astrick">*</span></td>
                            <td><input type="email" name="email" placeholder="Enter your email id" maxlength="30" size="25" required></td>
                        </tr>
                        
                        <tr class="table-row">
                            <td> TPO's Name : <span class="astrick">*</span></td>
                            <td><input type="text" name="tpo_name" placeholder="Enter your name" maxlength="30" size="25" required></td>
                        </tr>

                        <tr class="table-row">
                            <td> TPO's Id : <span class="astrick">*</span></td>
                            <td><input type="text" name="tpo_id" placeholder="Enter your id" maxlength="30" size="25" required></td>
                        </tr>


                        <tr>
                            <td>TPO's Contact Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="Contact_no" placeholder=" Enter your contact number" maxlength="10" size="25" required></td>
                        </tr>
                        <tr>
                            <td>Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="password" placeholder="Enter password" maxlength="15" size="25"  id="password" required></td>
                        </tr>
                        <tr>
                            <td>Confirm Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="confirm_password" placeholder="Confirm password" maxlength="15" size="25" id="confirm_password" required></td>
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






















