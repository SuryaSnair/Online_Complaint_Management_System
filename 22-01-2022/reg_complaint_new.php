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
$query=mysqli_query($conn,"SELECT * FROM user_login where Username='$Username'");
$row=mysqli_fetch_array($query);
$Username=$row["Username"];
if(isset($_POST["submit"]))
{
$category=$_POST["category"];
$subject=$_POST["subject"];
$complaintDetails=$_POST["complaintDetails"];
$Place=$_POST["Place"];
$land_mark=$_POST["land_mark"];
$pin=$_POST["pin"];
$Phone=$_POST["Phone"];
$sql="INSERT INTO tblcomplaints VALUES(NULL,'$Username','$category','$subject','$complaintDetails','$Place','$land_mark','$pin','$Phone',NULL)";
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

<form method="POST" action="">
<div class="container">
  <table  align ="center">
    <tr>
    <th colspan="2">Register Complaint</th>
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
    <td id="a">Subject of Complaint</td>
    <td><input type="text" placeholder="Subject of Complaint" name="subject" id="subject" required></td>
    </tr>
    <tr>
    <td id="a">Compalint Description</td>
    <td><textarea  style=" height:auto; width:100%;" placeholder="Complaint Description" name="complaintDetails" id="Complaint Description" required></textarea></td>
    </tr>
    <tr>
    <td  id="a">Place</td>
    <td><input type="text" placeholder="Place" name="Place" id="Place" required></td>
    </tr>
    <tr>
    <td  id="a">Land mark</td> 
    <td><input type="text" placeholder="Land mark" name="land_mark" id="Land mark" required></td> 
    </tr>
    <tr>
    <td id="a">Pin code</td>
    <td><input type="text" placeholder="Pin code" name="pin" id="Pin code" required></td>
    </tr>
    <tr>
    <td id="a">Phone number</td>
    <td><input type="text" placeholder="Phone number" name="Phone" id="Phone number" required></td>
    </tr>
    <tr>
    <td id="a">Upload file</td>
    <td><input type="file" name="file" ></td>
    </tr>
    </table>
    <p><input type="checkbox" required>I hereby declare that all the information contained in this form is in accordance with facts or truths to my knowledge.</p>
    
    <div align="center">
    <input class="button" type="Reset" class="registerbtn"/>
    <button type="submit" name="submit" class="registerbtn">Submit</button>
    </div>
    </div>
    </form>


</body>
</html>
