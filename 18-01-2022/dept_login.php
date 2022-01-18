<?php 

include 'config.php';

session_start();

error_reporting(0);


if (isset($_POST['Submit'])) {
	$dept_id = $_POST['dept_id'];
	$dept_password = $_POST['dept_password'];

	$sql = "SELECT * FROM dept_login WHERE dept_id='$dept_id' AND dept_password='$dept_password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['dept_id'] = $row['dept_id'];
		header("Location: home_department.php");
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
  <link rel="stylesheet" href="css/login.css">
  <link  href="css/opening_page.css" rel="stylesheet">
    <title>Department Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
  <style>
  a{
    text-decoration:none;
    color:grey;
  }
 </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">COMPLAINT MANAGEMENT SYSTEM </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="user_login.php">User Login</a>
                    </li>
                    <li>
                        <a href="dept_login.php">Department Login</a>
                    </li>
                    <li>
                        <a href="admin_login.php">Admin</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
  <div class="login-wrapper">
    <form action="" method="POST" class="form">
      <img src="img/dept.png" alt="">
      <h2>Department Login</h2>
      <div class="input-group">
        <input type="text" name="dept_id" id="dept_id" required>
        <label for="Department ID">Department ID</label>
      </div>
      <div class="input-group">
        <input type="Password" name="dept_password" id="dept_password" required>
        <label for="Password">Password</label>
      </div>
      <input type="submit" name="Submit" value="Login" class="submit-btn">
      <a href="index.html"><b>Back<<<b></a>
    </form>
  </div>
</body>
</html>


