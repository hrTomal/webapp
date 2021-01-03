<?php
  session_start();
?>

	<link rel="stylesheet" href="../view/css/change_password.css">

	<form class="change_pass_form" id="change_pass_form" method='POST' action="http://localhost/final_rms/controller/action_change_password_2.php" >
		<label id="old_password_label" border-style: groove;>Enter Old Password: </label><br>
		<input type='password' name='old_password' id="old_password" placeholder='Old Password'> <br>
		<label id="new_password_label" border-style: groove;>Enter new Password: </label><br>
		<input type='password' name='new_password' id="new_password" placeholder='new Password'> <br>
		<label id="new_repassword_label" border-style: groove;>Enter Old Password: </label><br>
		<input type='password' name='new_repassword' id="new_repassword" placeholder='Re-enter new Password'> <br>
		<input type='submit' name='submit' value='           Submit           '>
	</form>