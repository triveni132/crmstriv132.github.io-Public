<?php
//including the database connection file
include_once("db.php"); //database code
 
if(isset($_POST['submit'])) {    
    $tpo_name = $_POST['tpo_name'];
    $tpo_id = $_POST['tpo_id'];
    $Contact_no = $_POST['Contact_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    
        $result = mysqli_query($mysqli, "INSERT INTO tpo_registration(tpo_name,tpo_id,Contact_no,email,password,confirm_password) VALUES('$tpo_name','$tpo_id','$Contact_no','$email','$password','$confirm_password')");
        
        //display success message
        echo "<font color='green'>login successfully.";
        echo "<br/><a href='homepage.php'>Go to Home</a>";
    
}
?>