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

	if(@$_POST["submit_btn"])
	{
		
		$n=$_POST["your_input"];
		$i=2;
		$count=0;
		$count1=0;
	
		while($i<=$n)
		{
			$prime=0;
		
	for($j=2;$j<$i;$j++){
		
			if($i%$j==0)
			{
				$prime=1;
				break;
			}
	}
	
	if($prime==0)
	{
		echo"<b style='color:red;'>".$i."-is a prime</b><br>";
		$count++;

	}
	else
	{
		echo "<b style='color:gray;'>".$i."-is not a prime<br>";
		$count1++;
	}
	$i++;
	
  }
 }
 echo"<br>";
 echo"<br>";
 echo"<br>";
 echo"<br>"; 
 echo"<br>";
 echo $count."<b style='color:green;'>-PRIME NUMBER</b><br>";
 echo $count1."<b style='color:green;'>- NON PRIME NUMBER</b><br>";
	
?>

