

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
	<h1><center>Feedback form</center></h1>
		<form action="#" method="POST">
			<input type="text" name="title" placeholder="Title" class="input">
			<textarea name="content" placeholder="Write some text here...." class="input"></textarea>
			<input type="submit" name="Submit" value="Add" class="button">
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
		$title = @$_POST['title'];
		$content = @$_POST['content'];
		
		$conn->query("INSERT INTO `post` (`title`,`content`) VALUES('$title','$content')");
	}


?>