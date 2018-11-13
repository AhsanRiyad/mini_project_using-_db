<?php
session_start();
?>




<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
    </head>
    <body>

    <center>
        <form>

            <fieldset>
                <legend>Change Password</legend>				
                <table>
                    <tr>
                        <td>
                            Current Password: <br>
                            <input type="oldpassword" name="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            New Password: <br>
                            <input type="newpassword" name="">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Re-enter Password: <br>
                            <input type="re_enter_password" name="">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <hr>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value='Change'>
                            <br>
                            <a href="   <?php
                            if ( $_SESSION['type_p'] == 'User') {
                                echo 'user_home.php';
                            } else {
                                echo 'admin_home.php';
                            }
                            ?>  ">Go Home</a></td> 
                        </td>

                    </tr>




                </table>
            </fieldset>




        </form>
    </center>




</body>
</html>