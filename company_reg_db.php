 <?php
//including the database connection file

include("db.php"); //database code
 
if(isset($_POST['submit'])) {    
    $companyname = $_POST['companyname'];
    $companyid = $_POST['companyid'];
    $ceo_name = $_POST['ceo_name'];
    $pname = $_POST['pname'];
    $Contact_no = $_POST['Contact_no'];
    $email = $_POST['email'];
    $company_contact_no = $_POST['company_contact_no'];
    $company_address = $_POST['company_address'];
    $provided = $_POST['provided'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    

        
        $result = mysqli_query($mysqli, "INSERT INTO  registration_company12(companyname,companyid,ceo_name,pname,Contact_no,email,company_contact_no,company_address,provided,password,confirm_password) VALUES('$companyname','$companyid','$ceo_name','$pname','$Contact_no','$email','$company_contact_no','$company_address','$provided','$password','$confirm_password')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='homepage.php'>Go to Home</a>";
    
}
?> 