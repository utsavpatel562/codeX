<?php
// Include the configuration file to establish a database connection
include('config.php');

// Retrieve POST data from the form submission
$name = $_POST['name'];  // User's name
$email = $_POST['email'];  // User's email
$mobile = $_POST['mobile'];  // User's mobile number
$password = $_POST['password'];  // User's password

// SQL query to check if a user with the given email already exists in the 'registration' table
$check_email_query = "SELECT * FROM registration WHERE email='$email'";

// Execute the query to check for existing email
$run_query = mysqli_query($conn, $check_email_query);

// If a record is found with the same email, prevent duplicate registration
if (mysqli_num_rows($run_query) > 0) { 
    // Redirect back to the registration page with an error parameter
    header("location:register.php?error2=1"); 
    // Terminate the script to prevent further execution
    exit();  
}  

// SQL query to insert the new user into the 'registration' table
$qry = "INSERT INTO registration(name, email, mobile, password) VALUES('$name', '$email', '$mobile', '$password')";

// Execute the query to insert the new user
$result = mysqli_query($conn, $qry);

// Check if the insertion was successful
if ($result) {
    // Redirect to the index page with a success parameter
    header("location:index.php?success=1");   
} else {
    // If the insertion failed, output an error message
    echo "Something Went Wrong";
}

// Close the database connection to release resources
mysqli_close($conn);

?>
