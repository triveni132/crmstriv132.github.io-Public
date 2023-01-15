<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>CHANGE PASSWORD</title>
    
</head>
<style>
    input[type=submit] {
        background-color: green;
        color: white;
        padding: 8px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
        margin-right: 60px;
    }
    
    input[type=submit]:hover {
        background-color: blue;
    }
    
input[type=text], input[type=password] {
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
.change{
    padding-top: 80px;
}

</style>

<body bgcolor="lightgray">
<?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['submit'])){
        $old_password = $_REQUEST['old_password']; // removes backslashes
        $current_password = $_REQUEST['current_password'];

        $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into change_password (old_password, current_password, trn_date) VALUES ('$old_password', '$current_password','$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Password changed successfully..</h3><br/>Click here to <a href='index.php'>Home</a></div>";
        }
    }else{
?>


    <center>
        <div class="change">
            <fieldset style="background-color:  white; height: 450px; width: 600px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">CHANGE PASSWORD</h1>
                <form>
                  
    
                    <table>
                      <tr>
                            <td>Old Password :</td>
                            <td><input type="password" name="old_password" placeholder="Enter your old password" maxlength="30" size="25" ></td>
                        </tr>
                    
                        <tr>
                            <td> Current Password :</td>
                            <td><input type="password" name="current_password" placeholder="Enter your current password" maxlength="30" size="25"></td>
                        </tr>
                        <tr>
                            <td> Confirm Password :</td>
                            <td><input type="password" name="confirm_password" placeholder="Enter confirm password" maxlength="30" size="25"></td>
                        </tr>
                            
                    </table><br><br>
                    <table>
                        <tr>
                            <td> <input type="submit" name="submit" value="Save"></td>
                        
                        </tr>
                    </table>

                </form>

        </div>
        </fieldset>
    </center>

   <?php } ?>
     
</body>

</html>