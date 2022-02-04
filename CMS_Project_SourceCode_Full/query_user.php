<?php
session_start();
$conn=mysqli_connect("localhost","root","","ocms");
if($_SESSION["Username"]==true)
{
    $_SESSION["Username"];
}
else{
    header('location:query_user.php');
}
?>
<?php
$Username=$_SESSION["Username"];
$query=mysqli_query($conn,"SELECT * FROM user_login where Username='$Username'");
$row=mysqli_fetch_array($query);
$Username=$row["Username"];
if(isset($_POST["submit"]))
{
$category=$_POST["category"];
$query=$_POST["query"];
$sql="INSERT INTO query VALUES(NULL,'$Username','$category','$query','waiting for response...',NULL)";
if(mysqli_query($conn,$sql))
{
  echo 'success';
  header('location:view_query_user.php');
  }
  else{
      echo 'failed';
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
a{
    text-decoration:none;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #e6eaf0;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 50px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.custom-select {
  position: relative;
  font-family: Arial;
}


/* Set a style for the submit button */
.registerbtn {
  background-color: #060533;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
form{
    height: 500px;
    border-radius: 50px;
    width: 50%;
    background-color:rgb(77, 75, 74);
    position:relative;
    top: 50px;
    left:325px;
    opacity:0.9;
    float:left;
    box-shadow: 5px 10px #888888;
}
</style>
</head>
<body>
<div class="split left">
  <div class="centered">
<form method="POST" action="query_user.php">
<div class="container">
  <table  align ="center">
    <tr>
    <th colspan="2"><h1>Do you have any Queries<i class="fa fa-question-circle" style="font-size:48px;color:red"></i></h1></th>
    </tr>
    <tr>
    <td id="a">Category</td>
    <td><select name="category">
    <option>Select</option>
    <option>Water Department</option>
    <option>Electricity Department</option>
    <option>Road Department</option>
    <option>Garbage Department</option>
    </select></td>
    </tr>
    <tr>
    <td id="a">Query</td>
    <td><textarea  style=" height:auto; width:100%;" placeholder="Query" name="query" id="query" required></textarea></td>
    </tr>
    
    </table>
    <div align="center">
    <button type="submit" name="submit" class="registerbtn">Send</button>
    <p>Already send a query?<a href="view_query_user.php">Click here</a></p>
    </div>
    </div>
    </form>

</body>
</html>