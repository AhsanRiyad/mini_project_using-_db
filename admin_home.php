<?php
session_start();
?>





<!DOCTYPE html>
<html>
    <head>
        <title>Admin Home</title>
    </head>
    <body>

    <center>

        <div style="border: 1px solid black;">
            <h1>Welcome <?php echo $_SESSION['user_name_s']; ?> </h1>
            <a href="profile.php">Profile</a> <br>
            <a href="changepass.php">Change Password</a> <br>
            <a href="view_user.php">View User</a> <br>
            <a href="login.php">Log Out</a> <br>
        </div>

    </center>




</body>
</html>