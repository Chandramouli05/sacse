<?php

	include('connect.php');
	$id=$_GET['ID'];
	$conn->query("DELETE FROM `post` WHERE `ID`='$id' ");
	header("Location: list.php");
	
	
?>