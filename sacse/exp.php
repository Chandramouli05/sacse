<html>
	<head>
		<title> PHP forms</title>
	</head>
	
	
	<body>
		<form action="#" method="POST">
			<input type="text" name="your_input">
			<input type="submit" name="submit_btn" value="submit">
		</form>
	</body>
</html>







<?php
	if(@$_POST ["submit_btn"]){
		$n=$_POST["your_input"];
		$count=0;
		$c=1;
		for($i=1;$i<=$n;$i++){
			if($count==$c){
				echo"<br>";
				echo"$i";
				$count=1;
				$c++;
			}
		else{
			echo"$i";
			$count++;
		}
		
	}
	if($count==$c)
		echo"<br>Completed pyramid";
	else
		echo"<br>Uncompletewd pyramid";
	}
		

?>