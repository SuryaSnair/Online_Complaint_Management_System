<html>
<head>
<title>Frame2</title>
<style>
body{
    background-image: url("img/c2.jpg");
    
}
form{
	width: 150px;
	font-size: 16px;
	background:#b5b8bd ;
	padding: 10px;
	border: 5px solid #53687E;
    border-radius: 10px;
}
</style>
</head>
<body>
<form>
<h2>Department count:</h2>

<?php


$con = mysqli_connect("localhost","root","","admin_login");

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
</form>
</body>
</html>