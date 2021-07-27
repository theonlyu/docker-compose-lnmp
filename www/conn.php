<?php
$servername = "mysql_compose";
$username = "lnmp";
$password = "lnmp123";
try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    echo "连接mysql成功";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
