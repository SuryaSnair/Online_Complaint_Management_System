<?php 

include 'config.php';

session_start();

error_reporting(0);


if (isset($_POST['Submit'])) {
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$sql = "SELECT * FROM user_login WHERE Username='$Username' AND Password='$Password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['Username'] = $row['Username'];
		header("Location: home_user.php");
	} else {
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
	}
}
?>
<?php
include "config.php";
if(isset($_POST["submit"]))
{
$Username=$_POST["Username"];
$Email=$_POST["Email"];
$Phone=$_POST["Phone"];
$Password=$_POST["Password"];
$sql="INSERT INTO user_login VALUES(null,'$Username','$Email','$Phone','$Password')";
if(mysqli_query($conn,$sql))
{
echo"success";
}
else
	echo 'failed';
}
?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title> User Login and Registration</title>
      <link rel="stylesheet" href="css/userlog.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link  href="css/opening_page.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
 
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
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
            <div class="title signup">
               Signup Form
            </div>
         </div>
         <div class="form-container">
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="" method="POST" class="login">
                  <div class="field">
                     <input type="text" name="Username" placeholder="Username"  required>
                  </div>
                  <div class="field">
                     <input type="password" name="Password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="Submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>
               </form>
               <form action="#" method="POST" class="signup">
               <div class="field">
                     <input type="text" name="Username" placeholder="Username"  required>
                  </div>
                  <div class="field">
                     <input type="text" name="Email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="text" name="Phone" placeholder="Phone" required>
                  </div>
                  <div class="field">
                     <input type="password" name="Password" placeholder="Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" name="submit" value="Signup">
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
   </body>
</html>