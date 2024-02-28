<?php
include('config.php');
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
//here query check weather if user already registered so can't register again.  
$check_email_query="SELECT * FROM registration WHERE email='$email'";  
$run_query=mysqli_query($conn,$check_email_query);  

if(mysqli_num_rows($run_query)>0)  
{ 
    header("location:register.php?error2=1"); 
//echo "<script>alert('Email $email is already exist, Please try another one!')</script>";  
exit();  
}  
$qry = "INSERT INTO registration(name, email, mobile, password)
        VALUES('".$name."', '".$email."', '".$mobile."', '".$password."')";
$result = mysqli_query($conn, $qry);
if($result)
{
    header("location:index.php?success=1");   
}
else {
    echo "Something Went Wrong";
}
mysqli_close($conn);
?>