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

	   	 if (isset($_POST['submit'])) {
	   	 	
	   	 	echo "Form is Submitted <br />";
	   	 }
	   	 if (isset($_POST['username'])) {
	  	  	
	  	  	  $username = $_POST['username'];
	  	  }else
	  	  {
	  	  	$username = '';
	  	  }
	  	  if (isset($_POST['password'])) {
	  	  	  
	  	  	  $password = $_POST['password'];

	  	  }else
	  	  {
	  	  	$password = '';
	  	  }
	  
	   	 
	   	?>
	   	<?php
          
          echo "{$username} : {$password}";
        
	   	?>


</body>
</html>