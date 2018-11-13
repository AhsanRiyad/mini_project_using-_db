<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<form method="post" action="regCheck.php">
		<fieldset>
			<legend>REGISTRATION</legend>
			Name: 		<input type="text" name="name"><br>
			password: 	<input type="password" name="password"><br>
			Re-password:<input type="password" name="repass"><br>
			Type: 		<select name="type">
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
						<br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>