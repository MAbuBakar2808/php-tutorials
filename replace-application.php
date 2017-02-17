<?php


if (isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith'])){

	      $text = $_POST['text'];

	      $search = $_POST['searchfor'];

          $replace = $_POST['replacewith'];

	if (!empty($text) && !empty($search) && !empty($replace)) {
		
		echo "OK.";
}
		else{

			echo "Please Enter the fill all the fields.";
		}
	}




?>

<hr>

<form action="replace-application.php" method="POST">
   
   <textarea name="text" rows="5" cols="28"></textarea><br><br>
     
     Search for:<br>
      <input type="text" name="searchfor"><br><br>
        Replace With:<br>
          <input type="text" name="replacewith"><br><br>
     <input type="submit" value="Submit">


</form>