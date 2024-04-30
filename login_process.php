<?php
// Include configuration settings for database connection
include('config.php');

// Retrieve email and password from POST request
$email = $_POST['email'];
$password = $_POST['password'];

// Query the database to get the password associated with the provided email
$qry = "SELECT password FROM registration WHERE email='".$email."'";

// Execute the query and store the result
$result = mysqli_query($conn, $qry);

// Fetch the query result as an associative array
$row = mysqli_fetch_array($result);

// Check if the fetched password matches the provided password
if ($row['password'] == $password) {
    // If the password matches, redirect the user to the user dashboard
    header("location:user_dashboard.php");
    
    // Start a session to maintain the user's login state
    session_start();
    // Store the user's email in the session
    $_SESSION['user'] = $email;    
} else {
    // If the password does not match, redirect back to the index with an error parameter
    header("location:index.php?error=1");
}

// Close the database connection
mysqli_close($conn);
?>
