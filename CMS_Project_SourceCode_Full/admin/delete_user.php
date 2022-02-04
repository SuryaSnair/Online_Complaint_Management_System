<?php

include "config.php"; // Using database connection file here

$Username = $_GET['Username']; // get id through query string

$del = mysqli_query($conn,"delete from user_login where Username = '$Username'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:view_user.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>