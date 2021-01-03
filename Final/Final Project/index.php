<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" href="../final_rms/view/css/index.css">
</head>
<body >
	<form class="box" method="POST" action="../final_rms/controller/action_login.php" >
		<h1>Login</h1>
		<input type="text" name="email" placeholder="email" required>
		<input type="password" name="password" placeholder="password" required>
		<input type="Submit" name="Submit" value=" Sign in ">
		<button type="button" onClick="location.href='../final_rms/view/signup.php'">Sign UP</button>
	</form>	
</body>
</html>

