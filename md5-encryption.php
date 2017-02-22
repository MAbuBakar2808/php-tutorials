<?php

if (isset($_POST['user_password']) && !empty(isset($_POST['user_password']))) {
	 
	 $user_password = md5($_POST['user_password']);

	 $filename = 'hash.txt';

	 $handle = fopen($filename, 'r');

	echo $file_password = fread($handle, filesize($filename));

	if ($user_password == $file_password) {
		
		echo "Password Ok.";
	}else
	{
		echo "Incorrect password";
	}

}else
{
	echo "Please Enter the Password";
}



?>

<form action="md5-encryption.php" method="POST">
	
Password:<input type="text" name="user_password"><br><br>

<input type="submit" value="Submit">



</form>