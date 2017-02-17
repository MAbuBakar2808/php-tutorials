<?php

if (isset($_POST['User_input']) && !empty($_POST['User_input'])) {
	
	echo $User_input = $_POST['User_input'];

}





?>

<hr>

<form action="word-sensing.php" method="post">
   
   <textarea name="User_input" rows="5" cols="28"><?php echo $User_input; ?></textarea><br><br>

     <input type="submit" value="Submit">


</form>