<?php 

    require_once("config.php");

    if(isset($_POST['update']))
    {
        $dept_id=$_POST["dept_id"];
$dept_name=$_POST["dept_name"];
$dept_emailid=$_POST["dept_emailid"];
$dept_phone=$_POST["dept_phone"];
$dept_address=$_POST["dept_address"];
$dept_optr_name=$_POST["dept_optr_name"];
$dept_optr_desig=$_POST["dept_optr_desig"];
$dept_password=$_POST["dept_password"];

        $query = " update dept_login set dept_name = '".$dept_name."', dept_emailid='".$dept_emailid."',dept_phone='".$dept_phone."', dept_address = '".$dept_address."', dept_optr_name='".$dept_optr_name."',dept_optr_desig='".$dept_optr_desig."',dept_password = '".$dept_password."' where dept_id='".$dept_id."'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:view_dept.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:view_dept.php");
    }


?>