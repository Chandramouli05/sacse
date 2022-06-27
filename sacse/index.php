<?php
	
	session_start();
	if(!isset($_SESSION['login'])) {
		header("Location: login.php");
	}
	
?>


<html>
	<head>
		<title>SA CSE workshop</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="navbar">
			<div class="left">
				<img src="logo.png">
			</div>
			
			<div class="right">
				<a href="">home</a>
				<a href="add.php">Add New</a>
				<a href="list.php">List</a>
				<a href="userlist.php">User-List</a>
				<a href="signup.php">Sign-Up</a>
				<a href="logout.php">Log-Out</a>
			
			</div>
		<h1><center>MOULI TECH</center></h1>
		
	</div>
	
		<center>
			<img src="girl.png" width=100%>
			
	<div id="footer"><center><big><b>
COPYRIGHTS	&copy; 2020|DESIGNED BY MOULI TECHNOLOGIES PVT LTD.
</big></b></center></div>
	
	</body>
	
</html>