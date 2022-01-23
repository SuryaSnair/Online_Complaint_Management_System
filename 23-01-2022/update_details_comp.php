<?php
include('config.php');
$complaintNumber=$_GET['complaintNumber'];
$status=$_GET['status'];
$q="update tblcomplaints set status=$status where complaintNumber=$complaintNumber";
mysqli_query($conn,$q);
header('location:view_complaints_dept.php');
?>