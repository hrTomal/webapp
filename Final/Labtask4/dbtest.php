
<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>

	<style>
	form {
  		border-style: ridge;
  		background-color: white;
  		padding: 20px;
  		
    	position: absolute;
	}
	ol{
		margin-left: 25%;
		background-color: white;
		border: 1px solid black;
		position: absolute;
	}
	th,td{
		border: 1px solid black;
		align-self: center;
	}
	</style>

	<h1 style="text-align: center;">User Info</h1>

		<script>
			function validate() {
				var idErr = document.getElementById('id').value;
				var usernameErr = document.getElementById('username').value;
				var passErr = document.getElementById('pass').value;
				var emailErr = document.getElementById('email').value;
				var dobErr = document.getElementById('dob').value;
				console.log(idErr);

				if($idErr == "") {
					document.getElementById('errorMsg').innerHTML = "ID is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				else if($usernameErr == "") {
					document.getElementById('errorMsg').innerHTML = "username is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				}
				else if($passErr == "") {
					document.getElementById('errorMsg').innerHTML = "password is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				} 
				else if($emailErr == "") {
					document.getElementById('errorMsg').innerHTML = "Email is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				} 
				else if($dobErr == "") {
					document.getElementById('errorMsg').innerHTML = "Date of birth is empty";
					document.getElementById('errorMsg').style.color = "red";
					return false;	
				} 
				else{
					return true;
				} 			
			}
		</script>

</head>

<body style="background-color:#cccccc;">

	<form name="jsForm" method="POST" action="/Labtask4/controller/action_submit.php" onsubmit="return validate()" >

		<label style="font-size:20px" border-style: groove;>ID: </label>
		<input type="text" name="id" id="id">
		<br/><br/>

		<label style="font-size:20px" border-style: groove;>User name: </label>
		<input type="text" name="username" id="username">
		<br/><br/>

		<label style="font-size:20px">Password: </label>
		<input type="password" name="pass" id="pass">
		<br/><br/>

		<label style="font-size:20px">Email: </label>
		<input type="Email" name="email" id="email">
		<br/><br/>

		<label style="font-size:20px">Date of Birth: </label>
		<input type="date" name="dob" id="dob">
		<br/><br/>

		<hr>
		<input type="submit" value="Submit">


	</form>	
	<?php

	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbname = "dbtest";

	$conn = new mysqli($servername, $user, $password, $dbname);

	if($conn -> connect_error) {
		die("Error in db connection: " . $conn -> connect_error);
	}
	else {
	}   

	$sql = "SELECT * FROM users";
	$result = $conn -> query($sql);

	if($result->num_rows > 0) {
	// show result
	echo "<ol>";
	while($row = $result -> fetch_assoc()) {
		$user_id = $row['id'];
		echo "<li>id: " . $row['id'] . " " .
		 "Name: " . $row['username'] . " " .
		 "Email: " . $row['email'] . " " .
		 "Date of birth: " . $row['dob'] . " " . " " .  " " .
		 "<a href='/Labtask4/controller/action_update.php?id=$user_id'>Update</a>" . " " .
		 "<a href='/Labtask4/controller/action_delete.php?id=$user_id'>Delete</a>" . " " .
		 "<hr> " .
		 "</li>";
	}
	echo "</ol>";

	}
	else {
		echo "<p>Result is zero</p>";
	}

	$conn -> close();

	?>

</body>
</html>

