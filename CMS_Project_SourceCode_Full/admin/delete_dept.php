<?php

include "config.php"; // Using database connection file here

$dept_id = $_GET['dept_id']; // get id through query string

$del = mysqli_query($conn,"delete from dept_login where dept_id = '$dept_id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:view_dept.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>