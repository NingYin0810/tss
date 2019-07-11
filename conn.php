<?php
$mysql_server="localhost";
$mysql_username="root";
$mysql_password="root";
$mysql_database="sql";
$conn = mysql_connect($mysql_server,$mysql_username,$mysql_password) or die("数据库链接错误");
mysql_select_db($mysql_database,$conn);
mysql_query('set names utf8');//连接MySQL数据库
?>