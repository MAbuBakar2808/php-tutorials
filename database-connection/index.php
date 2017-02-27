<?php

	require 'mysql-connection.php';

	/*
	$query = "SELECT 'food', 'calories' FROM 'food' ORDER BY 'id'";
	*/

	$query = "SELECT * from food";
	$result = $db->query($query);
	$result_set = $result->fetch_assoc();
	print_r($result);
	print_r($result_set['food']);

	//while ($query_row = mysql_fetch_assoc($query)) {
		
	//}


?>