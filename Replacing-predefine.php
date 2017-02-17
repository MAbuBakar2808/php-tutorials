<?php


$find = array('This','new','string');

$replace = array('that','old','substring');

$string = "This was the new string ";

$new_string = str_replace($find, $replace, $string);

echo $new_string;

?>