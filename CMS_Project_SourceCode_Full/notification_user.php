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

a:link { text-decoration: none; }


a:visited { text-decoration: none; }


a:hover { text-decoration: none; }


a:active { text-decoration: none; }


a{
color: blue;
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
<h1>Notifications</h1>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","ocms");
if($_SESSION["Username"]==true)
{
    $_SESSION["Username"];
}
else{
    header('location:notification_user.php');
}
?>
<?php
$Username=$_SESSION["Username"];
$query=mysqli_query($conn,"SELECT * FROM  tblcomplaints JOIN send_result ON send_result.c_id = tblcomplaints.complaintNumber WHERE Username='$Username'");
if(mysqli_num_rows($query))
{
echo "<table><tr><th>Complaint id</th><th>Notification</th></tr>";
while($r=mysqli_fetch_assoc($query))
{?>
<tr>
<td><?php echo $r["complaintNumber"]; ?></td>
<td><?php echo "You have received a notification regarding your complaint " ?> from <?php echo $r["category"]; ?><a href="show_noti_user.php?complaintNumber=<?php echo $r['complaintNumber']; ?>"> .Click here </a> to view</td>
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