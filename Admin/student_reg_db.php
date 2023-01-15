
<?php
//including the database connection file
include("db.php"); //database code
 
if(isset($_POST['submit'])) {    
    $fullname = $_POST['fullname'];
    $fname = $_POST['fname'];
    $enrollment_no = $_POST['enrollment_no'];
    $aadhar = $_POST['aadhar'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $category = $_POST['category'];
    $clg_name = $_POST['clg_name'];
    $branch = $_POST['branch'];
    $gender = $_POST['gender'];
    $what_u_want = $_POST['what_u_want'];
    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $fourth = $_POST['fourth'];
    $fifth = $_POST['fifth'];
    $sixth = $_POST['sixth'];
    $cgpa = $_POST['cgpa'];
    $passout_year = $_POST['passout_year'];
    $resume = $_POST['resume'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    

    //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO  student_registration(fullname,fname,enrollment_no,aadhar,contact_no,email,dob,address,category,clg_name,branch,gender,what_u_want,first,second,third,fourth,fifth,sixth,cgpa,passout_year,resume,password,confirm_password) VALUES('$fullname','$fname','$enrollment_no','$aadhar','$contact_no','$email','$dob','$address','$category','$clg_name','$branch','$gender','$what_u_want','$first','$second','$third','$fourth','$fifth','$sixth','$cgpa','$passout_year','$resume','$password','$confirm_password')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='homepage.php'>Go to Home</a>";
    
}
?> 