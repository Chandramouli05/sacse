<?php
	include('connect.php');
	
	$id=$_GET['ID'];
	
	
	
	$select =$conn->query("SELECT * FROM `post` WHERE `id`='$id' ");
	$row=mysqli_fetch_assoc($select);
	
	
	
	
	if(@$_POST['Submit']){
		$title = @$_POST['title'];
		$content = @$_POST['content'];
		var_dump($title);
		$conn->query("UPDATE `post` SET `title`='$title',`content`='$content' WHERE `ID`='$id' "); 
		
		header("Location:list.php");
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
				<a href="index.php">home</a>
				<a href="add.php">Add New</a>
				<a href="list.php">List</a>
			</div>
		<h1><center>MOULI TECH</center></h1>
	</div>
	
	<div class="form-box">
	<h1><center>Feedback form</center></h1>
		<form action="#" method="POST">
			<input type="text" name="title" placeholder="Title" class="input" value="<?php echo $row['TITLE'];?>"/><br>
			<textarea name="content" placeholder="Write some text here...." class="input"><?php echo $row['CONTENT'];?></textarea>
			<input type="submit" name="Submit" value="Update" class="button">
		</form>
	</div>
	<div id="footer"><center><big><b>
COPYRIGHTS	 &copy; 2020|DESIGNED BY MOULI TECHNOLOGIES PVT LTD.
</big></b></center></div>

		
	</body>
	
</html>



