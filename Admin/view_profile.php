<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>View Profile</title>
    <?php
include("db.php"); //database code
?>
    
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
    
    input[type=reset] {
        background-color: green;
        color: white;
        padding: 8px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: right;
        margin-right: 60px;
    }
    
    input[type=reset]:hover {
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

</style>

<body bgcolor="lightgray">
    <center>
        <div>
            <fieldset style="background-color:  white; height: 600px; width: 600px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">VIEW PROFILE</h1>
                <form>
                  <?php
  $count=1;
  $sel_query = "select * from student_registration ";
  $result = mysqli_query($con,$sel_query);
  while($row = mysqli_fetch_assoc($result))
  {
    ?>
    
                    <table>
                      <tr>
                            <td>Email :</td>
                            <td><input type="text" name="email" placeholder="Enter your email id" maxlength="30" size="25"  value="<?php echo $row["email"]; ?>"></td>
                        </tr>
                    
                        <tr>
                            <td> Full Name :</td>
                            <td><input type="text" name="fullname" placeholder="Enter your name" maxlength="30" size="25" value="<?php echo $row["fullname"]; ?>"></td>
                        </tr>
                        <tr>
                            <td> Enrollment Number :</td>
                            <td><input type="text" name="enrollment_no" placeholder="Enter your name" maxlength="30" size="25" value="<?php echo $row["enrollment_no"]; ?>"></td>
                        </tr>
                        <tr>
                            <td> Contact Number :</td>
                            <td><input type="text" name="contact_no" placeholder=" Enter your contact number" maxlength="20" size="25" value="<?php echo $row["contact_no"]; ?>"></td>
                        </tr>
                            
                    </table><br><br>
                    <table>
                        <tr>
                            <td> <input type="submit" name="submit" value="Update"></td>
                            <td> </td>
                            <td><input type="reset" name="reset" value="reset"> </td>
                        </tr>
                    </table>
<?php $count++; }?> 

                </form>

        </div>
        </fieldset>
    </center>

        
</body>

</html>