<?php
if (isset($_POST['id'])) {
    $GLOBALS['id'] = $_POST['id'];
    $GLOBALS['password'] = $_POST['password'];
    $GLOBALS['name'] = $_POST['name'];
    $GLOBALS['email'] = $_POST['email'];
    $GLOBALS['type'] = $_POST['type'];

    $file = fopen('user_info.txt', 'a');
    $fileData = $name . '|' . $password . '|' . $id . '|' . $email . '|' . $type . "\r\n";
    fwrite($file, $fileData);
    fclose($file);

    echo '<h1 style="color: green; " >Registration successful</h1>';
} else {
    echo '<h1 style="color: black; " >Welcome to regristration module</h1>';
}
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
    </head>
    <body>


        

        <form method="post" action="#">
            <fieldset>
                <legend>REGISTRATION</legend>
                id: 		<input type="text" name="id"><br>
                password: 	<input type="password" name="password"><br>
                Re-password:<input type="password" name="repass"><br>
                Name: 		<input type="text" name="name"><br>
                Email: 		<input type="text" name="email"><br>
                User Type:  <select name="type">
                    <option>User</option>
                    <option>Admin</option>
                </select>
                <input type="submit" name="submit" value="Submit">
                
                <a href="login.php">Login here</a>
                
            </fieldset>
        </form>




    </body>
</html>