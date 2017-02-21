<?php

$filename = 'file2.txt';

if (file_exists($filename)) {
	
	echo "File already exist";
}else
{
	$handle = fopen($filename, 'w');

	fwrite($handle, "The second file.");
	fclose($handle);

}



?>