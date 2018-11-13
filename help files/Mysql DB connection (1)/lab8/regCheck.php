<?php

	if(isset($_REQUEST['submit'])){

		$name = $_REQUEST['name'];
		$pass = $_REQUEST['password'];
		$repass = $_REQUEST['repass'];
		$type = $_REQUEST['type'];

		if(empty($name) == true || empty($pass) == true || empty($type)){
			echo "null submission";
		}else{

			if($pass == $repass){


				$conn = mysqli_connect('localhost', 'root', '', 'webtech');

				$sql = "INSERT INTO user values('','".$name."','".$pass."','".$type."')";

				if(mysqli_query($conn, $sql)){
					echo "Success";
				}else{
					echo "failed";
				}

				mysqli_close($conn);

			}else
			{
				echo "pass and repass error";
			}
		}

	}else{
		header('location: reg.php');
	}

?>