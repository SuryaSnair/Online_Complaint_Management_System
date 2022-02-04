<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Complaints</title>
    <style>
button{
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color: #3486eb; 
  color: white; 
  height:30px;
  width:80px;
}
button:hover {background-color: #3486eb; 
}

button:active {
  background-color: #3486eb; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
a{
color: #FFFFFF;
text-decoration: none;
}
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #19225c;
  color: white;
}
</style>
</head>
<body>
<h1>Department Details</h1>
<?php
$conn=mysqli_connect("localhost","root","","ocms");
$dept_id=$_GET["dept_id"];
$sql="SELECT * FROM dept_login where dept_id='$dept_id'";
$query=mysqli_query($conn,$sql);
while($r=mysqli_fetch_assoc($query))
{ 
  $dept_id=$r["dept_id"];
    $dept_name=$r["dept_name"];
    $dept_emailid=$r["dept_emailid"];
    $dept_phone=$r["dept_phone"];
    $dept_address=$r["dept_address"];
    $dept_optr_name=$r["dept_optr_name"];
    $dept_optr_desig=$r["dept_optr_desig"];
    $dept_password=$r["dept_password"];
    ?>
<form>
  <table align="center">
    <tr><td>
    <label for="dept_id"><b>Department ID</b></label></td>
    <td><input type="text" placeholder="Enter Dept ID" name="dept_id" id="dept_id" value="<?php echo $r["dept_id"]; ?>" ></br><td>
</tr><tr><td><label for="dept_name"><b>Name</b></label></td>
<td><input type="text" placeholder="Enter Name" name="dept_name" id="dept_name" value="<?php echo $r["dept_name"]; ?>"></br></td>
</tr><tr><td><label for="dept_emailid"><b>Email-id</b></label></td>
<td><input type="text" placeholder="Enter Email-id" name="dept_emailid" id="dept_emailid" value="<?php echo $r["dept_emailid"]; ?>" ></br></td>
</tr><tr><td>
    <label for="dept_phone"><b>Phone Number</b></label></td>
    <td><input type="text" placeholder="Enter Phone number" name="dept_phone" id="dept_phone" value="<?php echo $r["dept_phone"]; ?>"></br></td>
    
</tr><tr><td><label for="dept_address"><b>Address</b></label></td>
<td><input type="text" placeholder="Enter Address" name="dept_address" id="dept_address" value="<?php echo $r["dept_address"]; ?>"></br></td>
    
</tr><tr><td><label for="dept_optr_name"><b>Operator Name</b></label></td>
<td><input type="text" placeholder="Enter Operator Name" name="dept_optr_name" id="dept_optr_name" value="<?php echo $r["dept_optr_name"]; ?>"></br></td>
</tr><tr><td><label for="dept_optr_desig"><b>Operator Designation</b></label></td>
<td><input type="text" placeholder="Enter Operator Designation" name="dept_optr_desig" id="dept_optr_desig" value="<?php echo $r["dept_optr_desig"]; ?>"></br></td>
      
</tr><tr><td><label for="dept_password"><b>Password</b></label></td>
<td><input type="text" placeholder="Enter Password" name="dept_password" id="dept_password" value="<?php echo $r["dept_password"]; ?>"></br></td>
 
</tr><tr><td colspan="2"> <button type="submit" value = "button"  name="submit" ><a href="view_dept.php">Back</a></button></td></tr>
</table>
<?php  
echo "</form>";
}
?>
</body>
</html>