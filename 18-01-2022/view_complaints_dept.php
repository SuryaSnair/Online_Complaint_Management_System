<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>View Complaints</title>
    <style>
.button {
  border: none;
  padding: 8px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #23943e; 
  color: black; 
  border: 2px solid #0b541c;
}

.button1:hover {
  background-color: #0b541c;
  color: white;
}

.button2 {
  background-color: #b80f0f; 
  color: black; 
  border: 2px solid #7d0b0b;
}

.button2:hover {
  background-color: #7d0b0b;
  color: white;
}
a{
color: #FFFFFF;
text-decoration: none;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #19225c;
  color: white;
}
</style>
</head>
<body>
<h1>Show Complaints</h1>
<a href="user_login.php">logout</a> 
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
$query2=mysqli_query($conn,"SELECT * FROM dept_login where dept_id='$dept_id'");
$row2=mysqli_fetch_array($query2);
$dept_name=$row2["dept_name"];
$sql="SELECT * FROM tblcomplaints where category='$dept_name'";
$query=mysqli_query($conn,$sql);
$link_address1="update_dept.php";
$link_address2="delete_dept.php";
if(mysqli_num_rows($query))
{
echo "<table><tr><th>complaintNumber</th><th>Username</th><th>address</th><th>complaintDetails</th><th>regDate</th><th>Update</th><th>Delete</th></tr>";
while($r=mysqli_fetch_assoc($query))
{?>
<tr>
<td><?php echo $r["complaintNumber"]; ?></td>
<td><?php echo $r["Username"]; ?></td>
<td><?php echo $r["address"]; ?></td>
<td><?php echo $r["complaintDetails"]; ?></td>
<td><?php echo $r["regDate"]; ?></td>
<td><button class="button1"><a href="update_dept.php?complaintNumber=<?php echo $r['complaintNumber']; ?>">Edit</a></button></td>
<td><button class="button2"><a href="delete_dept.php?complaintNumber=<?php echo $r['complaintNumber']; ?>">Delete</a></button></td>
  
</tr>
<?php
}
echo "</table>";
}
else
{
echo "<script>alert('no data')</script>";
}
?>
<a href="user_login.php">logout</a>
</body>
</html>