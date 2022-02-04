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

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #19225c;
  color: white;
}
</style>
</head>
<body>
<h1>Solve Queries!</h1>
<form method="POST" action="query_dept.php">
<?php
session_start();
$conn=mysqli_connect("localhost","root","","ocms");
if($_SESSION["dept_id"]==true)
{
    $_SESSION["dept_id"];
}
else{
    header('location:query_dept.php');
}
?>
<?php
$dept_id=$_SESSION["dept_id"];
$query2=mysqli_query($conn,"SELECT * FROM dept_login where dept_id='$dept_id'");
$row2=mysqli_fetch_array($query2);
$dept_name=$row2["dept_name"];
$sql="SELECT * FROM query where category='$dept_name'";
$query=mysqli_query($conn,$sql);

if(mysqli_num_rows($query))
{
echo "<table><tr><th>Query id</th><th>Query</th><th>Date & Time</th><th>Replay</th><th>Send</th></tr>";
while($r=mysqli_fetch_assoc($query))
{ 
$id=$r["query_id"];

if(isset($_POST["submit"]))
{
$id=$_POST["id"];
$reply=$_POST["reply"];
$sql1="UPDATE query SET reply = '$reply' WHERE query_id='$id';";

if(mysqli_query($conn,$sql1))
{
  echo 'success';
  header('location:query_dept.php');
  }
  else{
      echo 'failed';
  }
}
    ?>
<tr>
<td><input size="1" name="id" type="text" value="<?php echo $r["query_id"]; ?>" ></td>
<td><?php echo $r["query"]; ?></td>
<td><?php echo $r["date&time"]; ?></td>
<td><textarea  style=" height:auto; width:100%;" placeholder="<?php echo $r["reply"]; ?>" name="reply" id="reply"></textarea></td>

<td><button type="submit" value = "button"  name="submit" >Send</button></td>

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
</form>
</body>
</html>