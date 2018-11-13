<?php

	if(isset($_REQUEST['submit'])){

		$name = $_REQUEST['name'];
		$pass = $_REQUEST['password'];
		$repass = $_REQUEST['repass'];
		$email = $_REQUEST['email'];

		if(empty($name) == true || empty($pass) == true || empty($email)){
			echo "null submission";
		}else{

			if($pass == $repass){

				/*$data = "
					<user>
						<name>".$name."</name>
						<password>".$pass."</password>
						<email>".$email."</email>
					</user>";

					$myfile = fopen("abc.xml", 'w');
					fwrite($myfile, $data);
					fclose($myfile);*/

					$data = $name."|".$pass."|".$email;
					$myfile = fopen("user.txt", 'w');
					fwrite($myfile, $data);
					fclose($myfile);

					echo "Success";

			}else
			{
				echo "pass and repass error";
			}
		}

	}else{
		header('location: reg.php');
	}

?>