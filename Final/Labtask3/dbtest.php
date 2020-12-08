
<!DOCTYPE html>
<html>
<head>
	<title>User Info</title>

	<style>
	form {
  		border-style: ridge;
  		background-color: white;
  		padding: 20px;
  		
    	position: relative;
	}
	ol{
		margin-left: 25%;
		background-color: white;
		border: 1px solid black;
		position: relative;
	}
	th,td{
		border: 1px solid black;
		align-self: center;
	}
	</style>

	<h1 style="text-align: center;">User Info</h1>

</head>

<body style="background-color:#cccccc;">

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >

		<label style="font-size:20px" border-style: groove;>ID: </label>
		<input type="id" name="id" required>
		<br/><br/>

		<label style="font-size:20px" border-style: groove;>User name: </label>
		<input type="text" name="username" required>
		<br/><br/>

		<label style="font-size:20px">Password: </label>
		<input type="password" name="pass" required>
		<br/><br/>

		<label style="font-size:20px">Email: </label>
		<input type="Email" name="email" required>
		<br/><br/>

		<label style="font-size:20px">Date of Birth: </label>
		<input type="date" name="dob" required>
		<br/><br/>

		<hr>
		<input type="Submit" value="Submit">


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

	if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $id = test_input($_POST["id"]); 
        $username = test_input($_POST["username"]); 
        $pass = test_input($_POST["pass"]);
        $email = test_input($_POST["email"]); 
        $dob = test_input($_POST["dob"]);

        $stmt = $conn -> prepare("INSERT INTO Users (id, username, pass, email, dob) VALUES (? ,?, ?, ?, ?)");
		$stmt -> bind_param("issss", $id, $username, $pass, $email, $dob);
		$stmt -> execute(); 
        }

	function test_input($data) { 
          $data = trim($data); 
          $data = stripslashes($data); 
          $data = htmlspecialchars($data); 
          return $data; 
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
		 "<a href='/Labtask3/controller/action_update.php?id=$user_id'>Update</a>" . " " .
		 "<a href='/Labtask3/controller/action_delete.php?id=$user_id'>Delete</a>" . " " .
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

