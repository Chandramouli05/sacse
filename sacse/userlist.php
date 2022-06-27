<?php
	include('connect.php');
?>



<html>
	<title>SA CSE workshop</title>
	<link href="css/style.css" rel="stylesheet">
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
			<form action="search.php" method="GET">
			<input type="text" name="key" placeholder="Search here.....">
			<input type="submit" name="Search" value="Search">
		</form>
		<table>
			<tr>
				<th> Sl.no</th>
				<th> Title</th>
				<th> Content</th>
				<th> Action</th>
			</tr>
			<?php
				$i=1;
				$query=$conn->query("SELECT * FROM `post` ORDER BY `id` DESC");
				while($row= mysqli_fetch_assoc($query)){
					echo '
					
					<tr>
						<td>'.$i++.'</td>
						<td>'.$row['TITLE'].'</td>
						<td>'.$row['CONTENT'].'</td>
						<td>
							<a href="edit.php?ID='.$row['ID'].'" class="edit"> EDIT</a>
							<a href="delete.php?ID='.$row['ID'].'" class="delete">DELETE</a>
						</td>
					</tr>
					';
					
				}
			
			?>
			
				
					
				</table>
			
		</div>
	</body>
</html>