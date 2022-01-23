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
.button_1 {
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color:#13bf3e; 
  color: white; 
  height:30px;
  width:80px;
  font-size:12px;
}
.button_2 {
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color: #3486eb; 
  color: white; 
  height:30px;
  width:80px;
  font-size:12px;
}
.button_3 {
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color: #fa9e1e; 
  color: white; 
  height:30px;
  width:80px;
  font-size:12px;
}
.button_4 {
  border: none;
  padding: 4px ;
  border-radius: 15px;
  text-align: center;
  text-decoration: none;
  background-color:#d90d0d; 
  color: white; 
  height:30px;
  width:80px;
  font-size:12px;
}
.button_4:hover {background-color:#d90d0d; 
}

.button_4:active {
  background-color:#d90d0d; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
.button_1:hover {background-color:#13bf3e; 
}

.button_1:active {
  background-color:#13bf3e; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
.button_2:hover {background-color: #3486eb; 
}

.button_2:active {
  background-color: #3486eb; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}
.button_3:hover {background-color:#fa9e1e; 
}

.button_3:active {
  background-color:#fa9e1e; 
  box-shadow: 0 2px #666;
  transform: translateY(2px);
}


.button2 {
  background-color: #5abee6; 
  color: black; 
  border: 2px solid #7d0b0b;
}

.button2:hover {
  background-color:#517fdb;
  color: white;
}
a:link { text-decoration: none; }


a:visited { text-decoration: none; }


a:hover { text-decoration: none; }


a:active { text-decoration: none; }


a{
color: white;
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
<h1>View Complaint</h1>
<a href="user_login.php">logout</a>
<p align="right">
        <a href="reg_complaint_new.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span>Add 
        </a>
      </p>  
<?php
session_start();
$conn=mysqli_connect("localhost","root","","ocms");
if($_SESSION["Username"]==true)
{
    $_SESSION["Username"];
}
else{
    header('location:view_complaints_user.php');
}
?>
<?php
$Username=$_SESSION["Username"];
$query1=mysqli_query($conn,"SELECT * FROM user_login where Username='$Username'");
$row1=mysqli_fetch_array($query1);
$Username=$row1["Username"];
$sql="SELECT * FROM tblcomplaints where Username='$Username'";
$query=mysqli_query($conn,$sql);
$link_address1="update_dept.php";
$link_address2="delete_dept.php";
if(mysqli_num_rows($query))
{
echo "<table><tr><th>Reg id</th><th>Category</th><th>Subject</th><th>Place</th><th>Date</th><th>Status</th><th>View</th></tr>";
while($r=mysqli_fetch_assoc($query))
{?>
<tr>
<td><?php echo $r["complaintNumber"]; ?></td>
<td><?php echo $r["category"]; ?></td>
<td><?php echo $r["subject"]; ?></td>
<td><?php echo $r["Place"]; ?></td>
<td><?php echo $r["regDate"]; ?></td>
<td><?php
if($r['status']==1){
echo '<button class="button_1">Closed</button>';
}else if($r['status']==2){
  echo '<button class="button_4">Rejected</button>';
  }
else if($r['status']==3){
    echo '<button class="button_2">Verified</button>';
    }
else{
  echo '<button class="button_3">Processing</button>';
}
?>
</td>
<td><button class="button2"><a href="view_details_comp.php?complaintNumber=<?php echo $r['complaintNumber']; ?>">Show</a></button></td>
  
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