
<?php
require('db.php');
require("auth_vacancy.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_vacancy where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>

<title>Update Vacancy</title>
</head>
<style>
     .new{
          background-color: darkblue;
          padding: 10px;
          color: white;
     }
     .form{
             margin: 30px;
     }
     input[type="text"]
     {
           width: 100%;
  padding: 15px;
  margin: 10px 0 22px 0;
  display: inline-block;
  border: none;
  background: white;
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
    .back{
    color: red;
    font-size: 25px;
  }

</style>

<body>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$company_name = $_POST['company_name'];
     $job_title = $_POST['job_title'];
     $salary = $_POST['salary'];
     $job_description = $_POST['job_description'];
     $job_location = $_POST['job_location'];
     $no_of_opening = $_POST['no_of_opening'];
     $apply_date = $_POST['apply_date'];
     $last_date = $_POST['last_date'];
$update="UPDATE new_vacancy set id='" . $_POST['id'] . "', company_name='" . $_POST['company_name'] . "', job_title='" . $_POST['job_title'] . "', salary='" . $_POST['salary'] . "', job_description='" . $_POST['job_description'] . "', job_location='" . $_POST['job_location'] . "', no_of_opening='" . $_POST['no_of_opening'] . "', apply_date='" . $_POST['apply_date'] . "', last_date='" . $_POST['last_date'] . "' WHERE id='" . $_POST['id'] . "'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div class="new">
     <a href="after_login_company.php" class="back">Back</a>
     <center>
     <h1>Update Vacancy</h1>
</div><br><br>
</center>

<center>
     <form>
          <fieldset style="background-color:  antiquewhite; height: 900px; width: 600px;">
                <legend></legend>
<table  class="form">
<tr>
             <td> Vacancy Id :
             <td><input type="hidden" name="new"  value="1">
               <input type="text" name="vacancy_id"  value="<?php echo $row['id']; ?>"></td>
        </tr>
        <tr>
             <td> Company Name:
             <td><input type="text" name="company_name"  value="<?php echo $row['company_name']; ?>"></td>
        </tr>
          <tr>
             <td> Job Title :
             <td><input type="text" name="job_title"  value="<?php echo $row['job_title']; ?>"></td>
        </tr>
        <tr>
             <td> Monthly in-hand salary :
             <td><input type="text" name="salary"  value="<?php echo $row['salary']; ?>"></td>
        </tr>
        <tr>
             <td> Job Description :
             <td><input type="text" name="job_description"  value="<?php echo $row['job_description']; ?>"></td>
        </tr>
        <tr>
             <td> Job Location :
             <td><input type="text" name="job_location"  value="<?php echo $row['job_location']; ?>"></td>
        </tr>
        <tr>
             <td> Number Of Opening :
             <td><input type="text" name="no_of_opening"  value="<?php echo $row['no_of_opening']; ?>"></td>
        </tr>
        <tr>
             <td> Apply Date :
             <td><input type="text" name="apply_date"  value="<?php echo $row['apply_date']; ?>"></td>
        </tr>
        <tr>
             <td>Last Date :
             <td><input type="text" name="last_date"  value="<?php echo $row['last_date']; ?>"></td>
        </tr>
        <tr>
               <td> <input type="submit" name="submit" value="Update Vacancy" onclick="f();"></td>
        </tr>
</table>
</form>
</center> 
 <script type="text/javascript">
            function f() {
                alert('Vacancy Updated Successfully....');
            }
</script>
<?php } ?>
</div>
</div>
</body>
</html>
