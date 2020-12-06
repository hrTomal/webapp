<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

	<style>
		form {
  		display: inline-block;
    	width:auto;
    	text-align: right;
	}
	</style>

	<h1 style="text-align: center;">Edit Profile</h1>
	<hr>

</head>
<body style="background-color:#cccccc;">
	<center>

	<form method="POST" action="/rms/controller/action_edit_profile.php" >

		<label style="font-size:20px" border-style: groove;>User name: </label>
		<input type="text" name="user_name" required>
		<br/>
		<br/>

		<label style="font-size:20px">Phone: </label>
		<input type="text" name="phone" required>
		<br/><br/>

		<label style="font-size:20px">Email: </label>
		<input type="Email" name="email" required>
		<br/><br/>

		<hr>
		<input type="Submit" value=" Submit">

		<input type="button" value=" Back " onClick="location.href='http://localhost/rms/view/profile.php'">
		<br/>

	</form>
	</center>
</body>
</html>

<?php include 'footer.php';?>