<?php


define('server', 'localhost');
define('server_name', 'root');
define('password', '');
define('dbname', 'votingsystem');

$con = mysqli_connect(server,server_name,password,dbname);

if (!$con) {
	echo "Failed to connect ".mysql_error($con);
}


?>