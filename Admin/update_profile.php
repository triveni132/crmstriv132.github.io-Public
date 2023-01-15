<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Update Profile</title>
    
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
                <h1 style="color: indigo;" class="hr">UPDATE PROFILE</h1>
                <form>

                    <table>
                        <tr>
                            <td> Full Name :</td>
                            <td><input type="text" name="tpo_name" placeholder="Enter your name" maxlength="30" size="25"></td>
                        </tr>
                        <tr>
                            <td> Enrollment Number :</td>
                            <td><input type="text" name="tpo_name" placeholder="Enter your name" maxlength="30" size="25"></td>
                        </tr>
                        <tr>
                            <td> Contact Number :</td>
                            <td><input type="text" name="Contact_no" placeholder=" Enter your contact number" maxlength="20" size="25"></td>
                        </tr>
                        <tr>
                            <td>Email :</td>
                            <td><input type="text" name="email" placeholder="Enter your email id" maxlength="30" size="25"></td>
                        </tr>
                        
                    </table><br><br>
                    <table>
                        <tr>
                            <td> <input type="submit" name="submit" value="Update"></td>
                            <td> </td>
                            <td><input type="reset" name="reset" value="reset"> </td>
                        </tr>
                    </table>

                </form>

        </div>
        </fieldset>
    </center>

        
</body>

</html>