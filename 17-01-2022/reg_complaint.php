<?php
session_start();
$conn=mysqli_connect("localhost","root","","ocms");
if($_SESSION["Username"]==true)
{
    echo "welcome"." ".$_SESSION["Username"];
}
else{
    header('location:view_complaints_user.php');
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
$address=$_POST["address"];
$complaintDetails=$_POST["complaintDetails"];
$sql="INSERT INTO tblcomplaints VALUES(NULL,'$Username','$category','$address','$complaintDetails',NULL)";
if(mysqli_query($conn,$sql))
{
echo"success";
}
else
	echo 'failed';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a{
    text-decoration:none;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #b5b3b1;
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

<form method="POST" action="">
  <div class="container">
  <h1>Register complaints</h1>
    <hr>
    
    <label for="category"><b>category</b></label>
    <input type="text" placeholder="Enter category" name="category" id="category" required>
    <label for="address"><b>address</b></label>
    <input type="text" placeholder="Enter address" name="address" id="address" required>
    <label for="complaintDetails"><b>complaintDetails</b></label>
    <input type="text" placeholder="Enter complaintDetails" name="complaintDetails" id="complaintDetails" >

    
    <hr>

    <button type="submit" name="submit" class="registerbtn">Register</button>
  
  </div>
</form>
<a href="view_complaints_user.php">back</a>
</body>
</html>
