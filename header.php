<?php
header("HTTP 1.1/ 404 NOT FOUND");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<pre>
		<?php
          
          print_r(headers_list());
		?>	

	</pre>

</body>
</html>