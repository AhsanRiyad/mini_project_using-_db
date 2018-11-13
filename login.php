<?php
session_start();

if (isset($_POST['submit'])) {

    $id = $_POST['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'wt');

    $sql = "select * from user where id='$id' and password='".$_POST['password']."'";
    //echo $sql;

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    mysqli_close($conn);






    $_SESSION['user_name_s'] = $_POST['id'];
    $_SESSION['passoword_s'] = $_POST['password'];
    $_SESSION['email_s'] = $row['email'];
    $_SESSION['type_p'] = $row['type'];
    $_SESSION['user_id_s'] = $row['id'];


    if($_POST['id'] == $row['id']  &&  $_POST['password'] == $_SESSION['passoword_s'])
    {
        if (trim($_SESSION['type_p']) == 'User') {
            header('Location: user_home.php');
            
        } else if (trim($_SESSION['type_p']) == 'Admin') {
            header('Location: admin_home.php');
            
        } else {
            echo 'something went wrong';
            
        }
    }
    else {
        echo 'pass does not match';
    }
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
                    <td><input type="text" name="id"></td>
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