<?php

session_start();


?>











<!DOCTYPE html>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>

    <center>
        <form>
            <fieldset>
                <legend>Profile</legend>		

                <table border="1px">
                    <tr>
                        <td colspan="2"> Profile </td>
                    </tr>


                    <tr>
                        <td>ID</td>
                        <td> <?php echo $_SESSION['user_id_s']; ?> </td>
                    </tr>

                    <tr>
                        <td>NAME</td>
                        <td> <?php echo $_SESSION['user_name_s']; ?> </td>
                    </tr>

                    <tr>
                        <td>EMAIL</td>
                        <td> <?php echo $_SESSION['email_s']; ?> </td>
                    </tr>


                    <tr>
                        <td>USER TYPE</td>
                        <td> <?php echo $_SESSION['type_p']; ?> </td>
                    </tr>

                    <tr>
                        <td colspan="2" align="right"><a href=" <?php
                            if ($_SESSION['type_p'] == 'User') {
                                echo 'user_home.php';
                            } else {
                                echo 'admin_home.php';
                            }
                            ?>  ">Go Home</a></td>

                    </tr>

                </table>


            </fieldset>
        </form>
    </center>



</body>
</html>