<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
a{
    text-decoration:none;
}
</style>
<body class="w3-light-white">



<!-- Sidebar/menu -->
<nav><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="img/user.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
    <?php
session_start();
$conn=mysqli_connect("localhost","root","","ocms");
if($_SESSION["Username"]==true)
{
    echo "Welcome"." ".$_SESSION["Username"];
}
else{
    header('location:view_complaints_user.php');
}
?>
    
      <br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5><a href="dashboard_user.php" target ="bottom2">Dashboard</a></h5>
  </div>
  <div class="w3-bar-block">
    <a href="about.php" class="w3-bar-item w3-button w3-padding" target ="bottom2"><i class="fa fa-home"></i>  About</a>
    <a href="reg_complaint.php" class="w3-bar-item w3-button w3-padding" target ="bottom2"><i class="fa fa-comment"></i>  Register</a>
    <a href="view_complaints_user.php" class="w3-bar-item w3-button w3-padding" target ="bottom2"><i class="fa fa-bullseye fa-fw"></i>  Status</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" target ="bottom2"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" target ="bottom2"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding" target ="bottom2"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>



</body>
</html>