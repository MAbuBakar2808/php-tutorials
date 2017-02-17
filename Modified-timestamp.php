<?php

$time = time();

$time_now = date('d M Y @ H:i:s' ,$time);

$time_modified = date('d M Y @ H:i:s', strtotime('-1 week'));

echo "The Current Date and Time is ".$time_now. "<br>The Modified time is" .$time_modified;







?>