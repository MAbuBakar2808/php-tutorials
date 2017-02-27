<?php

	$db_host = 'localhost';

	$db_user = 'root';

	$db_name = 'php-database';

	$db_pass = '';

	$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	  //test if connection occured
	
	if (mysqli_connect_errno()) {
        
        die("Database connection failed! " .
        	
        	mysqli_connect_error() .
        	
        	"(" . mysqli_connect_errno() . ")"
        	
        	);
		
	}
?>

<?php
	
	//perform database query
	$query = "SELECT * FROM food ";

	$result = mysqli_query ($connection , $query);

    //test if there is query error
	if (!$result) {
	 	
	 	die("Database Query Failed!");
	 } 




?>


<!DOCTYPE html>
<html>
<head>
	<title>Database Connection</title>
</head>
<body>
	<ul>
	<?php
          //use returned data if any
  		while($row = mysqli_fetch_assoc($result)){

  			//output data from each row
  	?>
  	        <li><?php echo $row['calories']; ?></li>
  	<?php  
  			

  		}

	?>
	</ul> 

	<?php
    
    //4.release return data

    mysqli_free_result($result);

	?>
</body>
</html>

<?php

	mysqli_close($connection);

?>