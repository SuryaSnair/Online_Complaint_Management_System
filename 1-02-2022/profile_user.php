<!DOCTYPE html>
<html>
<head>
<title>Profile user</title>
<style>
body{
background-color:#e6eaf0;
background-size:cover;
background-repeat:no-repeat;
background-attachment:fixed;
}
h1{
color:white;
text-shadow: 2px 2px 4px #000000;
}
table {
  width: 50%;
}
td {
  height: 50px;
}
.center {
    display: block;
    transition:transform 0.25s ease;
  }
img:hover {
    -webkit-transform:scale(1.75); 
    transform:scale(1.75);
}

</style>
</head>
<body>
    <form>
    <?php
session_start();
$conn=mysqli_connect("localhost","root","","ocms");
if($_SESSION["Username"]==true)
{
    $_SESSION["Username"];
}
?>
<?php
$Username=$_SESSION["Username"];
$query=mysqli_query($conn,"SELECT * FROM user_login where Username='$Username'");
while($r=mysqli_fetch_assoc($query))
{
?>
<table align="center">
<?php
echo "<tr><td><b>Reg ID</b></td><td>:  ".$r["Reg_id"]."</td></tr><tr><td><b>Name</b></td><td>:  ".$r["Username"]."</td></tr><tr><td><b>Email-id</b></td><td>:  ".$r["Email"]."</td></tr><tr><td><b>Phone</b></td><td>:  ".$r["Phone"]."</td></tr><tr><td><b>Password</b></td><td>:  ".$r["Password"]."</td></tr>";
?>
<?php
echo "</table>";
}
?>
</form>
</body>
</html>