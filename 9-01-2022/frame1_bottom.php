<html>
<head>
<title>Frame</title>
<link rel="stylesheet type="text/css" href="properties.css"/>
</head>
<style>
    body{
        background-color: gray;
    }
    .btn-group a {
    color: #FFFFFF;
    text-decoration: none;
}
    .btn-group button {
      background-color: #1a133b; /* Green background */
      border: 1px solid rgb(238, 236, 243); /* Green border */
      color: white; /* White text */
      padding: 10px 24px; /* Some padding */
      cursor: pointer; /* Pointer/hand icon */
      width: 95%; /* Set a width if needed */
      height: 55px;
      display: block; /* Make the buttons appear below each other */
    }
    
    .btn-group button:not(:last-child) {
      border-bottom: none; /* Prevent double borders */
    }
    
    /* Add a background color on hover */
    .btn-group button:hover {
      background-color: #1b1a5e;
    }
    </style>	
<body>
<div class="btn-group">
    <button><a href="about.php" target ="bottom2" class="alpha" >About</a></button>
    <button ><a href="dashboard.php" target ="bottom2" class="alpha">Dashboard</a></button>
    <button><a href="typesofcss.html" target ="bottom2" class="alpha">User List</a></button>
    <button><a href="view_dept.php" target ="bottom2" class="alpha">Department List</a></button>
    
</div>
</body>
</html>