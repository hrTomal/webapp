
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

	<style>
	form {
  		display: inline-block;
    	width:auto;
    	text-align: right;
    	background-color:white;
    	padding: 10px;

	}
	</style>

	<h1 style="text-align: center;">Sign Up now</h1>
	<hr>

</head>
<body style="background-color:#cccccc;">

<center>

	<form method="POST" action="/rms/controller/action_signup.php" >

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

		<label style="font-size:20px">Password: </label>
		<input type="password" name="password" required>
		<br/><br/>
		<label style="font-size:20px">Repeat Password: </label>
		<input type="password" name="repassword" required>
		<br/><br/>

		<hr>
		<input type="Submit" value=" Submit">

		<input type="button" value=" Back " onClick="location.href='http://localhost/rms/index.php'">
		<br/>

	</form>	
</center>

</body>
</html>

<?php include 'footer.php';?>