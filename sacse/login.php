<?php
	session_Start();
		
	
	include('connect.php');
		
	if(@$_POST['submit']){
		$username=@$_POST['username'];
		$password=@$_POST['password'];
			
		$sql="SELECT *from login where username='$username';";
		$result=$conn->query($sql);
			
		if($result && mysqli_num_rows($result)>0)
		{
			$user=mysqli_fetch_assoc($result);
			if($password==$user['password'])
			{
				$_SESSION['login']=$username;
				header("location:index.php");
			}	
			else
			{
				echo "Invalid Username & Password";
			}
		}
		else{
			echo"Invalid user";
		}
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
			
	
		<h1><center>MOULI TECH</center></h1>
</div>
	
	<div class="form-box">
	<h2><center><b> LOG IN</b></center></h2>
		<form action="#" method="POST">
			<input type="email" name="username" placeholder="username" class="input">
			<input type="password" name="password" placeholder="********" class="input">
			<input type="submit" name="submit" value="Login" class="button">
		</form>
	</div>
	<div id="footer"><center><big><b>
COPYRIGHTS	 &copy; 2020|DESIGNED BY MOULI TECHNOLOGIES PVT LTD.
</big></b></center></div>

		
	</body>
	
</html>



