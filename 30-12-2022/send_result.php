<?php
session_start();
$conn=mysqli_connect("localhost","root","","ocms");
if($_SESSION["dept_id"]==true)
{
    $_SESSION["dept_id"];
}
?>
<?php
$dept_id=$_SESSION["dept_id"];
error_reporting(E_ERROR | E_PARSE);
$conn=mysqli_connect("localhost","root","","ocms");
$complaintNumber = $_GET['complaintNumber'];
if(isset($_POST["submit"]))
{
$c_id=$_POST['c_id'];
$comments=$_POST['comments'];
$image=$_FILES["image"]['name'];
$sql="INSERT INTO send_result VALUES('$c_id','$image','$dept_id','$comments')";
if(mysqli_query($conn,$sql))
{
  move_uploaded_file($_FILES['image']['tmp_name'],"r_uploads/".$_FILES['image']['name']);
  header("Location:list_result.php");
  }
  else{
     echo 'Failed... Already given feedback of complaint or Check entered data!!!';
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Details of complaint</title>
<style>
body{
background-color:#e6eaf0;
background-size:cover;
background-repeat:no-repeat;
background-attachment:fixed;
}

</style>
</head>
<body>
<form method="POST" action="send_result.php" enctype="multipart/form-data">
<div class="container">
  <table  align ="center">
  <tr>
    <td id="a">Complaint no:</td>
    <td><input size="50" name="c_id" type="text" value=
    "<?php
    echo $complaintNumber;
    ?>"
    >

</td>
    </tr>
    <tr>
    <td id="a">Upload file</td>
    <td><input size="50" name="image" type="file" accept="image/*" required></td>
    </tr>
    <td id="a">Comments:</td>
    <td><textarea  style=" height:auto; width:100%;" placeholder="Comments" name="comments" id="Comments" required></textarea></td>
   
    <tr>
        <td colspan="2"><p align="center"><input type="checkbox" required>Verified</p></td>
</tr>
    </table>
    
    
    <div align="center">
    <input class="button" type="Reset" class="registerbtn"/>
    <button type="submit" name="submit" class="registerbtn">Submit</button>
    </div>
    </div>
    </form>
</body>
</html>