<?php
$mysql_hostname="localhost";
$mysql_user="root";
$mysql_password="pratik@123";
$mysql_database="KeshwaniComputers";
$con=mysql_connect($mysql_hostname,$mysql_user,$mysql_password) or die("Oops connection not established");
mysql_select_db($mysql_database) or die("Oops something went wrong");
?>
