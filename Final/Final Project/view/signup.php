
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="../view/css/signup.css">
	<script src="/final_rms/view/js/signup.js"></script>

</head>
<body>

</center>

	<form method="POST" class="signup_box" action="/final_rms/controller/action_signup.php" onsubmit="return validate()">

		<h1>Sign Up</h1>
		<hr>
		<input type="text" name="user_name" id="user_name" placeholder="Username" required>
		<input type="text" name="phone" id="phone" placeholder="Phone number" required>
		<input type="Email" name="email" id="email" placeholder="Email" required>
		<input type="password" name="password" id="password" placeholder="Password" required>
		<input type="password" name="repassword" id="repassword" placeholder="Repet Password" required>
		<hr>
		<input type="Submit" value=" Submit">
		<input type="button" value=" Back " onClick="location.href='http://localhost/final_rms/index.php'">

	</form>	
	<p id="errorMsg"></p>

</body>
</html>