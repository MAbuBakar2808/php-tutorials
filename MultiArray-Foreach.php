<?php

$food = array('Healthy'=>array('salad','pasta','chicken'),'Unhealthy'=>array('pizza','burger','icecream') );


foreach ($food as $element => $inner_array) {
	
	echo '<strong>'.$element.'</strong><br>';


       foreach ($inner_array as $item) {
		
	       echo $item.'<br>';
	}
}


















?>