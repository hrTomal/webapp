<?php
  session_start();
?>

	<link rel="stylesheet" href="../view/css/search_train.css">

	<form class="search_train_form" method='POST' action="http://localhost/final_rms/controller/action_search_train.php" >
		<label id="search_label" border-style: groove;>Enter Train name: </label><br>
		<input type='text' name='train_name' id="train_name" placeholder='Train name'> <br>
		<input type='submit' name='submit' value='           Submit           '>
	</form>