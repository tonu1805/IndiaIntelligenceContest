<?php
	$server = 'server name';
	$user = 'user name';
	$password = 'database password';
	$db = 'database name';
	
	$conn = mysqli_connect($server,$user,$password,$db);
	if(!$conn)
	{
		die("Connection Failed!:".mysqli_connect_error());
	}
?>