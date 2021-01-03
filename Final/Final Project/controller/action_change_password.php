<?php
  session_start();
?>

	<form method='POST' action="action_change_password_2">
		<label style='font-size:20px' border-style: groove;>Email: </label><br>
		<input type='text' name='email' placeholder='$_SESSION["email"]' readonly> <br>
		<label style='font-size:20px' border-style: groove;>Enter Old Password: </label><br>
		<input type='password' name='old_password_form' placeholder='Old Password'> <br>
		<label style='font-size:20px' border-style: groove;>Enter new Password: </label><br>
		<input type='password' name='new_password_form' placeholder='new Password'> <br>
		<label style='font-size:20px' border-style: groove;>Enter Old Password: </label><br>
		<input type='password' name='new_repassword_form' placeholder='Re-enter new Password'> <br>
		<input type='submit' name='submit' value='calculate'>
	</form>

	echo '<script>
		alert("Returned");
		window.location.href="../view/uHome.php";
		</script>';
?>
