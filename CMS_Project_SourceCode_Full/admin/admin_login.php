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
  <link rel="stylesheet" href="../css/login.css">
    <link  href="../css/opening_page.css" rel="stylesheet">
    <title>Admin Login</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/half-slider.css" rel="stylesheet">
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
                <a class="navbar-brand" href="../index.html">COMPLAINT MANAGEMENT SYSTEM </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../user_login.php">User Login</a>
                    </li>
                    <li>
                        <a href="../dept_login.php">Department Login</a>
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
      <img src="../img/admin.png" alt="">
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
      <a href="../index.html"><b>Back<<<b></a>
    </form>
  </div>
</body>
</html>


