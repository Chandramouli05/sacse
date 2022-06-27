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
				<a href="index.php">home</a>
				<a href="add.php">Add New</a>
				<a href="list.php">List</a>
				<a href="userlist.php">User-List</a>

			</div>
		<h1><center>MOULI TECH</center></h1>
	</div>
	
	<div class="form-box">
	<h1><center>Sign-Up</center></h1>
		<form action="#" method="POST">			
			<a><b>Mail-ID:</b></a><br>
			<br>
			<input type="e-mail" name="username" placeholder="Enter your mail address"  class="input"><br>
			
			
			<a><b>Password:</b></a><br>
			<br>
			<input type="password" name="password" placeholder="Enter the new password"  class="input"><br>
		
			
			
			
			<input type="submit" name="Submit" value="Sign-up" class="button">
		</form>
	</div>
	<div id="footer"><center><big><b>
COPYRIGHTS	 &copy; 2020|DESIGNED BY MOULI TECHNOLOGIES PVT LTD.
</big></b></center></div>

		
	</body>
	
</html>



<?php
	include('connect.php');
	if(@$_POST['Submit']){
		$username = @$_POST['username'];
		$password = @$_POST['password'];
		
		$conn->query("INSERT INTO `user` (`username`,`password`) VALUES('$username','$password')");
	}


?>