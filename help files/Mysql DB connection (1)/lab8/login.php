<?php
	
	if(isset($_GET['error'])){
		echo $_GET['error'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post" action="logCheck.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>USERNAME</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>