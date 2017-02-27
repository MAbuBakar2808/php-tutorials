<?php

$conn_error = 'Could not connect';

$mysql_host = 'localhost';

$db_name = 'php-database';

$mysql_user = 'root';

$mysql_pass = '';

@mysqli_connect($mysql_host, $mysql_user, $mysql_pass, $db_name) || die($conn_error);

echo "Connected!";

//echo 'error here';

//mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || die($conn_error);




?>