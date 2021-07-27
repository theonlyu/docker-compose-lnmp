<?php
$dbhost="mysql_compose";
$dbuser="lnmp";
$dbpass="lnmp123";
$dbname="wordpress";

$connect=mysql_connect($dbhost,$dbuser,$dbpass);
if(!$connect) exit('数据库连接失败！');
mysql_select_db($dbname,$connect);

mysql_close($connect);
?>
