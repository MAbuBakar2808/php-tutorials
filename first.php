<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php $link_name = "Second Page"; ?>
	<?php $id = 5; ?>
	<?php $company = 'Jhons & Jhons'; ?>
	<a href="second.php?id=<?php echo $id;?>&company=<?php echo urlencode($company) ;?>">
	<?php echo $link_name;?></a>
</body>
</html>