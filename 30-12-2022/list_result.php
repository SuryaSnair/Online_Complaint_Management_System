<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>View feedback</title>
    <style>

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
.center {
    display: block;
    transition:transform 0.25s ease;
  }
img:hover {
    -webkit-transform:scale(2.5); 
    transform:scale(2.5);
}
</style>
</head>
<body>
<h1>View Complaints Feedback</h1>
<p align="right">
        <a href="send_result.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-plus"></span>Add Feedback 
        </a>
      </p>  
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
$query=mysqli_query($conn,"SELECT * FROM send_result where dept_id='$dept_id'");
if(mysqli_num_rows($query))
{
echo "<table><tr><th>Complaint Number</th><th>Feedback image</th><th>Comments</th></tr>";
while($r=mysqli_fetch_assoc($query))
{?>
<tr>
    <td><?php echo $r['c_id']; ?></td>
    <td><img src="<?php echo "http://localhost/eg/r_uploads/".$r['image'];  ?>" height="100px" width="150px" class="center"></td>
    <td><?php echo $r['comments']; ?></td>
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