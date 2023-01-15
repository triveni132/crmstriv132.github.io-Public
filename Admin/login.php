<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Company Login page</title>
    </head>
<style>
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
    
     .astrick{
  color: red;
}
.marq{
    color: red;
}
</style>

<body background="red_blue.jpg" style="align-self: right;">
    <center>
        <div>
            <fieldset style="background-color:  white; height: 400px; width: 500px; padding: 20px; margin: 100px;">
                <legend></legend>
                <h1 style="color: indigo;" class="hr">LOGIN</h1>
                
                <form action="company_reg_db.php" method="POST">

                    <table>

                        <tr>
                            <td>Email of Company : </td>
                            <td><input type="text" name="email" placeholder="enter company's email id"></td>
                        </tr>

                        <tr>
                            <td> Password :</td>
                            <td><input type="password" name="password" placeholder="Enter Password"></td>
                        </tr>
                    <center>   
                    <table>
                        <tr>
                            <td> <input type="submit" name="submit" value="Login"></td>
                           
                    </table>
                   </center>
                </form>

        </div>
        </fieldset>
    </center>
        
</body>

</html>