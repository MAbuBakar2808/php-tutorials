<?php

$string = "How are you what are you doing";

if(preg_match('/doing/', $string))
{
	echo "Match found";
}
else
{

	echo "Match not found";
}

?>