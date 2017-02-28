<!DOCTYPE html>
<html>
<head>
	<title>Form Processing</title>
</head>
<body>
	<pre>
		<?php

		print_r($_POST);

		?>
	</pre>

		<br />

	   <?php

	   	 $username = $_POST['username'];
	   	 $password = $_POST['password'];

	   	 echo "{$username} : {$password}";


	   ?>


</body>
</html>