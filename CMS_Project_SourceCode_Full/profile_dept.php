<!DOCTYPE html>
<html>
<head>
<title>Profile Dept</title>
<style>
   p{
margin-left: 450px;
}
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
h2{
  text-align:center;
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
    <p><img src="img/admin.png" class="w3-circle" style="width:80px"></p>
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
$query=mysqli_query($conn,"SELECT * FROM dept_login where dept_id='$dept_id'");
while($r=mysqli_fetch_assoc($query))
{
?>
<table align="center">
<?php
echo "<tr><td><b>Dept ID</b></td><td>:  ".$r["dept_id"]."</td></tr><tr><td><b>Department Name</b></td><td>:  ".$r["dept_name"]."</td></tr><tr><td><b>Email-id</b></td><td>:  ".$r["dept_emailid"]."</td></tr><tr><td><b>Phone</b></td><td>:  ".$r["dept_phone"]."</td></tr><tr><td><b>Address</b></td><td>:  ".$r["dept_address"]."</td></tr>
<tr><td><b>Operator Name</b></td><td>:  ".$r["dept_optr_name"]."</td></tr><tr><td><b>Operator Designation</b></td><td>:  ".$r["dept_optr_desig"]."</td></tr>";
?>
<?php
echo "</table>";
}
?>
</form>
</body>
</html>