<?php

	session_start();

	// if (isset($_SESSION['username']) && isset($_SESSION['age'])) {
		
		echo "Welcome ,".$_SESSION['username'].'You are'.$_SESSION['age'];
	// }else
	// {
	// 	echo "Please enter the username ";
	// }
?>