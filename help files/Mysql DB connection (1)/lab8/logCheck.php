<?php

	if(isset($_POST['submit'])){

		$uname 		= trim($_POST['username']);
		$password 	= trim($_POST['password']);

		if($uname == "" || $password == ""){
			
			header('location: login.php?error=null_found');

		}else{

			
			$conn = mysqli_connect('localhost', 'root', '', 'webtech');

			$sql = "select * from user where username='".$uname."' and password=".$password;

			$result = mysqli_query($conn, $sql);

			$row = mysqli_fetch_assoc($result);

			mysqli_close($conn);

			if($uname == $row['username'] && $password == $row['password']){
				
				setcookie('username', '123', time()+3600, '/');
				setcookie('password', '11111', time()+3600, '/');

				header('location: home.php');

			}else{
				header('location: login.php?error=invalid_user');
			}
		}

	}else{
		echo "invalid request!";
	}

?>