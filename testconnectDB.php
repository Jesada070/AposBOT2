
<?php
echo "okok pass";

$link = mysql_connect('sql12.freemysqlhosting.net', 'sql12164271', 'ShxeHByM84');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}else{
echo 'Connected successfully';
mysql_close($link);
}


echo "okok";

//  https://warm-brushlands-72856.herokuapp.com/testconnectDB.php
?>


<!-- Server: sql12.freemysqlhosting.net
Name: sql12164271
Username: sql12164271
Password: ShxeHByM84
Port number: 3306 -->

