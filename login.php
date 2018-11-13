<?php
session_start();

if (isset($_POST['submit'])) {
    $file = fopen("user_info.txt", "r");

    while (!feof($file)) {

        $GLOBALS['fileArray'] = explode('|', fgets($file));
        if ($fileArray[0] == $_POST['username']) {

            if ($fileArray[1] == $_POST['password']) {

                $_SESSION['user_name_s'] = $_POST['username'];
                $_SESSION['passoword_s'] = $_POST['password'];
                $_SESSION['email_s'] = trim($fileArray[3]);
                $_SESSION['type_p'] = trim($fileArray[4]);
                $_SESSION['user_id_s'] =  trim($fileArray[2]);

                //print_r($_SESSION);
                
                if (trim($fileArray[4]) == 'User') {
                    header('Location: user_home.php');
                    break;
                } else if (trim($fileArray[4]) == 'Admin') {
                    header('Location: admin_home.php');
                    break;
                } else {
                    echo 'something went wrong';
                    echo $fileArray[4];
                    break;
                }
            }
        }
    }

    fclose($file);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>

        <form method="post" action="#">
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
                        <td>Remember Me</td>
                        <td><input type="checkbox" name="remember">
                            <a href="reg.php">Register here</a>

                        </td>
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