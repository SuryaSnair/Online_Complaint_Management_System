<?php 

    require_once("config.php");
    $dept_id = $_GET['dept_id'];
    $query = " select * from dept_login where dept_id='".$dept_id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
       
$dept_id=$row["dept_id"];
$dept_name=$row["dept_name"];
$dept_emailid=$row["dept_emailid"];
$dept_phone=$row["dept_phone"];
$dept_address=$row["dept_address"];
$dept_optr_name=$row["dept_optr_name"];
$dept_optr_desig=$row["dept_optr_desig"];
$dept_password=$row["dept_password"];
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

<form method="POST" action="edit_dept.php?dept_id=<?php echo $dept_id ?>">
  <div class="container">
  <h1>Add Department</h1>
    <hr>
    
    <label for="dept_id"><b>Department ID</b></label>
    <input type="text" placeholder="Enter Dept ID" name="dept_id" id="dept_id" >
    <label for="dept_name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="dept_name" id="dept_name" value="<?php echo $dept_name ?>">
    <label for="dept_emailid"><b>Email-id</b></label>
    <input type="text" placeholder="Enter Email-id" name="dept_emailid" id="dept_emailid" value="<?php echo $dept_emailid ?>" >
   
    <label for="dept_phone"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone number" name="dept_phone" id="dept_phone" value="<?php echo $dept_phone ?>">
    
    <label for="dept_address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="dept_address" id="dept_address" value="<?php echo $dept_address ?>">
    
     <label for="dept_optr_name"><b>Operator Name</b></label>
    <input type="text" placeholder="Enter Operator Name" name="dept_optr_name" id="dept_optr_name" value="<?php echo $dept_optr_name ?>">
    <label for="dept_optr_desig"><b>Operator Designation</b></label>
    <input type="text" placeholder="Enter Operator Designation" name="dept_optr_desig" id="dept_optr_desig" value="<?php echo $dept_optr_desig ?>">
      
    <label for="dept_password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="dept_password" id="dept_password" value="<?php echo $dept_password ?>">

    
    <hr>

    <button type="submit" name="update" class="registerbtn">Update</button>
  
  <a href="view_dept.php" align="center"><h2>Back</h2></a>
  </div>
</form>

</body>
</html>
