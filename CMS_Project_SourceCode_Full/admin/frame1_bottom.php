<html>
<head>
<title>Frame</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body{
        background-color: gray;
    }
    .btn-group a {
    color: #FFFFFF;
    text-decoration: none;
}
    .btn-group button {
      background-color: #1a133b; /* Green background */
      border: 1px solid rgb(238, 236, 243); /* Green border */
      color: white; /* White text */
      padding: 10px 24px; /* Some padding */
      cursor: pointer; /* Pointer/hand icon */
      width: 95%; /* Set a width if needed */
      height: 55px;
      display: block; /* Make the buttons appear below each other */
    }
    
    .btn-group button:not(:last-child) {
      border-bottom: none; /* Prevent double borders */
    }
    
    /* Add a background color on hover */
    .btn-group button:hover {
      background-color: #1b1a5e;
    }
    </style>	
<body>
<nav><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../img/admin.png" class="w3-circle w3-margin-right" style="width:46px">
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
    </div>
  </div>
  <br>
<div class="btn-group">
    <button><a href="about.php" target ="bottom2" class="alpha" >About</a></button>
    <button ><a href="dashboard_admin.php" target ="bottom2" class="alpha">Dashboard</a></button>
    <button><a href="view_user.php" target ="bottom2" class="alpha">User List</a></button>
    <button><a href="view_dept.php" target ="bottom2" class="alpha">Department List</a></button>
    
</div>
</nav>
</body>
</html>