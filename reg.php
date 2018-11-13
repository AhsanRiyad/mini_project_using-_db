<?php
if (isset($_POST['submit'])) {
    $GLOBALS['id'] = $_POST['id'];
    $GLOBALS['password'] = $_POST['password'];
    $GLOBALS['name'] = $_POST['name'];
    $GLOBALS['email'] = $_POST['email'];
    $GLOBALS['type'] = $_POST['type'];

    
    if(empty($name) == true || empty($password) == true || empty($type) == true || empty($email) == true || empty($id) == true ){
        echo "null submission";
    }
    else
    {

     $conn = mysqli_connect('localhost', 'root', '', 'wt');

     $sql = "INSERT INTO `user` (`name`, `id`, `email`, `type`, `password`) VALUES ('$name', '$id', '$email', '$type', '$password')";

     if(mysqli_query($conn, $sql)){
        echo "Success";
    }else{
        echo "failed";
    }

    mysqli_close($conn);

}


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