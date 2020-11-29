<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>

	<h1 style="text-align: center;">Login</h1>
	<hr/>

</head>
<body >
	<center>
		<form method="POST" action="/SimpleBanking/controller/actionLogin.php">
			<label>Email: </label>
			<input type="text" name="email" required>
			<br>
			<br>
			<label>Password: </label>
			<input type="Password" name="password" required>
			<br>
			<br>
			<input type="submit" name="submit">

			<hr>
		</form>
		
		
	</center>


</body>
</html>

