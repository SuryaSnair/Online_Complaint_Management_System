<!DOCTYPE html>
<html>
<head>
<title>Embed PHP in a .html File</title>
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


</style>
</head>
<body>
    <form>
<?php

$conn=mysqli_connect("localhost","root","","ocms");

$complaintNumber = $_GET['complaintNumber']; 
$sel ="SELECT * FROM tblcomplaints where complaintNumber = '$complaintNumber'"; 
$query=mysqli_query($conn,$sel);
while($r=mysqli_fetch_assoc($query))
{
?>
<table align="center">
<?php
echo "<tr><td>Date of Register    </td><td>:  ".$r["regDate"]."</td></tr><tr><td>Reg id        </td><td>:  ".$r["complaintNumber"]."</td></tr><tr><td>Username        </td><td>:  ".$r["Username"]."</td></tr><tr><td>category        </td><td>:  ".$r["category"]."</td></tr><tr><td>Subject        </td><td>:  ".$r["subject"]."</td></tr>
<tr><td>Details        </td><td>:  ".$r["complaintDetails"]."</td></tr><tr><td>Place        </td><td>:  ".$r["Place"]."</td></tr><tr><td>Land mark        </td><td>:  ".$r["land_mark"]."</td></tr><tr><td>Pin code        </td><td>:  ".$r["pin"]."</td></tr><tr><td>Phone        </td><td>:  ".$r["Phone"]."</td></tr>";
echo "</table>";
}
?>
</form>
</body>
</html>