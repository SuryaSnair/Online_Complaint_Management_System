<?php 

include 'config.php';

session_start();

error_reporting(0);


if (isset($_POST['Submit'])) {
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$sql = "SELECT * FROM admin_login WHERE Username='$Username' AND Password='$Password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['Username'] = $row['Username'];
		header("Location: home_admin.php");
	} else {
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">
  <title>Admin Login</title>
  <style>
  a{
    text-decoration:none;
    color:black;
  }
 </style>
</head>
<body>
  <div class="login-wrapper">
    <form action="" method="POST" class="form">
      <img src="img/admin.png" alt="">
      <h2>Admin Login</h2>
      <div class="input-group">
        <input type="text" name="Username" id="Username" required>
        <label for="Username">User Name</label>
      </div>
      <div class="input-group">
        <input type="Password" name="Password" id="Password" required>
        <label for="Password">Password</label>
      </div>
      <input type="submit" name="Submit" value="Login" class="submit-btn">
      <a href="index.html"><b>Back<<<b></a>
    </form>
  </div>
</body>
</html>


