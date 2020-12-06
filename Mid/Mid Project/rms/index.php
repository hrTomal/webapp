<?php
include 'view/header.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>

	<style>
	form {
  		border-style: ridge;
  		background-color: white;
  		padding: 20px;
  		left: 41%;
   		top: 28%;
    	
    	position: absolute;

	}
	body{
		background-color: #cccccc;
	}
	</style>

	<h1 style="text-align: center;">Welcome to Railway</h1>

</head>
<body >
	<center>
		<hr/>

	<form method="POST" action="/rms/controller/action_login.php" >

		<label style="font-size:20px" border-style: groove;>Email</label>
		<br/>
		<input type="text" name="mail" required>
		<br/>
		<br/>
		<label style="font-size:20px">Password</label>
		<br/>
		<input type="password" name="password" required>
		<br/><br/>
		<input type="Submit" value=" Sign in ">
		<br/>
		<hr>
		<input type="button" onClick="location.href='http://localhost/rms/view/signUp.php'" name="button" value="Sign Up">
		<br/>

		<?php include 'view/footer.php';?>


	</form>	
		
	</center>


</body>
</html>

