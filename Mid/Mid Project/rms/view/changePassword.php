
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>

	<style>
	
	</style>

	<h1 style="text-align: center;">Change Password</h1>

</head>
<body style="background-color:#cccccc;;">

	<form method="POST" action="/rms/controller/action_change_password.php" >

		<label style="font-size:20px" border-style: groove;>Old password: </label>
		<input type="password" name="old_password" required>
		<br/>
		<br/>

		<label style="font-size:20px">Password: </label>
		<input type="password" name="new_password" required>
		<br/><br/>

		<label style="font-size:20px">Re enter password: </label>
		<input type="password" name="new_repassword" required>
		<br/><br/>

		<hr>
		<input type="Submit" value=" Submit">


		<input type="button" value=" Cancel " onClick="location.href='http://localhost/rms/view/uHome.php'">
		<br/>

	</form>
</body>
</html>

<?php include 'footer.php';?>