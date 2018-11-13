<?php

	if(isset($_POST['submit'])){

		$uname 		= trim($_POST['username']);
		$password 	= trim($_POST['password']);

		if($uname == "" || $password == ""){
			
			header('location: login.php?error=null_found');

		}else{

			/*$file = fopen('user.txt', 'r');
			$userdata = fread($file, filesize('user.txt'));		
			$userArray = explode('|', $userdata);*/

			$obj = simplexml_load_file('user.xml');

			if($uname == trim($obj->name) && $password == trim($obj->password)){
				
				header('location: home.php');

			}else{
				header('location: login.php?error=invalid_user');
			}
		}

	}else{
		echo "invalid request!";
	}

?>