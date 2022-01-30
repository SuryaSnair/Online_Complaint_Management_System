<!DOCTYPE html>
<html>
<head>
<title>Details of feedback</title>
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

$conn=mysqli_connect("localhost","root","","ocms");

$complaintNumber = $_GET['complaintNumber']; 
$sel ="SELECT * FROM send_result where c_id = '$complaintNumber'"; 
$query=mysqli_query($conn,$sel);
while($r=mysqli_fetch_assoc($query))
{
?>
<table align="center">
<?php
echo "<tr><td><b>Complaint id</b></td><td>:  ".$r["c_id"]."</td></tr><tr><td><b>Comments</b></td><td>:  ".$r["comments"]."</td></tr>";
?>
<tr><td colspan="2"><img src="<?php echo "http://localhost/eg/r_uploads/".$r['image'];  ?>" height="500px" width="550px" class="center"></td></tr>;
<?php
echo "</table>";
}
?>
<a href="notification_user.php">Back</a>
</form>
</body>
</html>