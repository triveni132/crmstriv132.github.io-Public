<?php
// Include config file
require_once "datab.php";
 
// Define variables and initialize with empty values
$username = $tpo_name = $tpo_id = $Contact_no = $email = $password = $confirm_password = "";
$username_err = $tpo_name_err = $tpo_id_err = $Contact_no_err = $email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM newdemo WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate tpo_name
    if(empty(trim($_POST["tpo_name"]))){
        $tpo_name_err = "Please enter a tpo_name.";
    
    } else{
        $tpo_name = trim($_POST["tpo_name"]);
        // Prepare a select statement
        $sql = "SELECT id FROM newdemo WHERE tpo_name = ?";
    }
    
    // Validate tpo_id
    if(empty(trim($_POST["tpo_id"]))){
        $tpo_id_err = "Please enter a tpo_id.";
    } else{
        $tpo_id = trim($_POST["tpo_id"]);
        // Prepare a select statement
        $sql = "SELECT id FROM newdemo WHERE tpo_id = ?";
    }

    // Validate Contact_no
    if(empty(trim($_POST["Contact_no"]))){
        $Contact_no_err = "Please enter a Contact_no.";
    } else{

        // Prepare a select statement
        $sql = "SELECT id FROM newdemo WHERE Contact_no = ?";
    }
    $Contact_no = trim($_POST["Contact_no"]);
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        $email = trim($_POST["email"]);
        // Prepare a select statement
        $sql = "SELECT id FROM newdemo WHERE email = ?";
    }
    

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($tpo_name_err) && empty($tpo_id_err) && empty($Contact_no_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO newdemo (username, tpo_name, tpo_id, Contact_no, email, password) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_tpo_name, $param_tpo_id, $param_Contact_no, $param_email, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_tpo_name = $tpo_name;
            $param_tpo_id = $tpo_id;
            $param_Contact_no = $Contact_no;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: logintpo.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
 

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>TPO Registration new</title>
    
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
include("header.php");
?>
<br><br><br><br>
    <center>
        <div>
            <fieldset style="background-color:  white; height: 800px; width: 600px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">REGISTRATION TPO</h1><br>
                <marquee class="marq" >After register you will be verified by admin for which you will have to wait up to 24 hours.</marquee><br><br><br><br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <table>
                    <tr class="table-row">
                            <td> Username : <span class="astrick">*</span></td>
                            <td><input type="text" name="username" placeholder="Enter your Username" maxlength="30" size="25" required <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span></td>
                        </tr>
                        

                        <tr class="table-row">
                            <td> TPO's Name : <span class="astrick">*</span></td>
                            <td><input type="text" name="tpo_name" placeholder="Enter your name" maxlength="30" size="25" required <?php echo (!empty($tpo_name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tpo_name; ?>">
                <span class="invalid-feedback"><?php echo $tpo_name_err; ?></span></td>
                        </tr>

                        <tr class="table-row">
                            <td> TPO's Id : <span class="astrick">*</span></td>
                            <td><input type="text" name="tpo_id" placeholder="Enter your id" maxlength="30" size="25" required  <?php echo (!empty($tpo_id_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tpo_id; ?>">
                <span class="invalid-feedback"><?php echo $tpo_id_err; ?></span></td>
                        </tr>

                        <tr>
                            <td> Contact Number : <span class="astrick">*</span></td>
                            <td><input type="text" name="Contact_no" placeholder=" Enter your contact number" maxlength="20" size="25" required <?php echo (!empty($Contact_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Contact_no; ?>">
                <span class="invalid-feedback"><?php echo $Contact_no_err; ?></span></td>
                        </tr>
                        <tr>
                            <td>Email : <span class="astrick">*</span></td>
                            <td><input type="email" name="email" placeholder="Enter your email id" maxlength="30" size="25" required <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span></td>
                        </tr>
                        <tr>
                            <td>Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="password" placeholder="Enter password" maxlength="30" size="25" required <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span></td>
                        </tr>
                        <tr>
                            <td>Confirm Password : <span class="astrick">*</span></td>
                            <td><input type="password" name="confirm_password" placeholder="Confirm password" maxlength="30" size="25" required  <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span></td>
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
        
</body>

</html>