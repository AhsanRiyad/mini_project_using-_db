<?php
	//session_start();
	//session_destroy();
	//session_unset($_SESSION['username']);

	setcookie('username', '123', time()-10, '/');
	header('location: login.php');

?>