<?php
	session_start();

	if(isset($_COOKIE['username'])){
		echo "Welcome home!";
	}else{
		header('location: login.php');
	}
	
?>

<a href="logout.php">logout</a>