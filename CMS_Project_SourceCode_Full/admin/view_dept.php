<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>View Department</title>
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
<h1>View Department</h1>
<p align="right">
        <a href="add_dept.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span>Add 
        </a>
      </p>  
<?php
$conn=mysqli_connect("localhost","root","","ocms");

$sql="SELECT * FROM dept_login";
$query=mysqli_query($conn,$sql);
$link_address1="update_dept.php";
$link_address2="delete_dept.php";
if(mysqli_num_rows($query))
{
echo "<table><tr><th>Dept ID</th><th>Name</th><th>Phone</th><th>Address</th><th>Operator</th><th>Details</th><th>Delete</th></tr>";
while($r=mysqli_fetch_assoc($query))
{?>
<tr>
<td><?php echo $r["dept_id"]; ?></td>
<td><?php echo $r["dept_name"]; ?></td>
<td><?php echo $r["dept_phone"]; ?></td>
<td><?php echo $r["dept_address"]; ?></td>
<td><?php echo $r["dept_optr_name"]; ?></td>
<td><button class="button1"><a href="update_dept.php?dept_id=<?php echo $r['dept_id']; ?>">Show</a></button></td>
<td><button class="button2"><a href="delete_dept.php?dept_id=<?php echo $r['dept_id']; ?>">Delete</a></button></td>
  
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
</body>
</html>