<!DOCTYPE html>
<html>
<title>dasboard user</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
a{
    text-decoration:none;
}
</style>
<body class="w3-light-grey">

 <!-- Header -->
 <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Admin Dashboard</b></h5>
  </header>
  <div class="w3-row-padding w3-margin-bottom">
      
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fas fa-user-tie" style='font-size:45px'></i></div>
        <div class="w3-right">
          <h3>
          <?php


$con = mysqli_connect("localhost","root","","ocms");

	// SQL query to display row count
	// in building table
	$sql = "SELECT * from dept_login";

	if ($result = mysqli_query($con, $sql)) {

	// Return the number of rows in result set
	$rowcount = mysqli_num_rows( $result );
	
	// Display result
	printf($rowcount);
}

// Close the connection
mysqli_close($con);

?>
          </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Department</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
          <?php


$con = mysqli_connect("localhost","root","","ocms");

	$sql = "SELECT * from user_login";

	if ($result = mysqli_query($con, $sql)) {
	$rowcount = mysqli_num_rows( $result );
	printf($rowcount);
}

mysqli_close($con);

?>
          </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
          <?php


$con = mysqli_connect("localhost","root","","ocms");

	// SQL query to display row count
	// in building table
	$sql = "SELECT * from tblcomplaints";

	if ($result = mysqli_query($con, $sql)) {

	// Return the number of rows in result set
	$rowcount = mysqli_num_rows( $result );
	
	// Display result
	printf($rowcount);
}

// Close the connection
mysqli_close($con);

?>
          </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Complaints Registered</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
          <?php


$con = mysqli_connect("localhost","root","","ocms");

	// SQL query to display row count
	// in building table
	$sql = "SELECT * from tblcomplaints where status=1";

	if ($result = mysqli_query($con, $sql)) {

	// Return the number of rows in result set
	$rowcount = mysqli_num_rows( $result );
	
	// Display result
	printf($rowcount);
}

// Close the connection
mysqli_close($con);

?>
        
          </h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Solved Complaints</h4>
      </div>
    </div>
  </div>
  </body>
</html>