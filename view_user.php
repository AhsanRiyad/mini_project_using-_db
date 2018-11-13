<?php
session_start();


$file = fopen("user_info.txt", "r");
$GLOBALS['counter_u'] = 0;
while (!feof($file)) {

    fgets($file);
    ++$counter_u;
}
fclose($file);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>User List</title>
    </head>
    <body>
        <table border="1">
            <tr>

                <td colspan="4" align="center"> User List </td>
            </tr>

            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>EMAIL</td>
                <td>USER TYPE</td>
            </tr>



<?php
$file = fopen("user_info.txt", "r");
$GLOBALS['counter_u1'] = 0;
while (!feof($file)) {

    $fileArray = explode('|', fgets($file));
 
    if($counter_u1< $counter_u-1){
    echo '<tr>';
    echo '<td>' . $fileArray[2] . '</td>';
    echo '<td>' . $fileArray[0] . '</td>';
    echo '<td>' . $fileArray[3] . '</td>';
    echo '<td>' . $fileArray[4] . '</td>';
    echo '</tr>';

    ++$counter_u1;
    }
}
fclose($file);
?>




            <tr>		
                <td colspan="4" align="right"> <a href="admin_home.php"> Go Home </a>  </td>
            </tr>


        </table>





    </body>
</html>